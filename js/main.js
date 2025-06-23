
async function main() {
    const $ = await require("jQuery");
    const Splide = await require("Splide");
    const AOS = await require("AOS");

    function onClick(handler, el = document) {
        const handleClick = (event) => {
            handler(event);
        };

        el.addEventListener("mousedown", (event) => handleClick(event));
        el.addEventListener("touchend", (event) => handleClick(event));
    }

    const $page = $("#page.site");

    const handleMouseOver = ((event) => {

        if (event.target.matches("[data-hero-trigger]")) {
             $target = $(event.target.closest(''));
            const $tar = $(event.target);
            const data = $tar.attr("data-hero-trigger");
            $img = $page.find(".hero-image").first();
            $img.attr("data-hero-image", data);
        }
    }).bind(this);

    let mouseTimeout;
    const handleMouseOut = ((event) => {
        if (event.target.matches("[data-hero-trigger]") && mouseTimeout == null) {
            mouseTimeout = setTimeout(() => {
                const $img = $page
                        .find(".hero-image")
                        .first();
                $img.attr("data-hero-image", "home");
                clearTimeout(mouseTimeout);
                mouseTimeout = null;
            }, 500);
        }
    }).bind(this);

    $page
        .on("mouseenter", handleMouseOver)
        .on("mouseout", handleMouseOut);

    AOS.init();
    const carousel = $("#splide");
    if (carousel.length) {
        new Splide("#splide", {
            type: "loop",
            width: "80%",
            perPage: 3,
            breakpoints: {
                991: { perPage: 1 }
            },
            arrowPath: "M1.75 36.388L31 19.5 1.75 2.613v33.775z"
        }).mount();
    }

    // convert text to date
    const $dateInputField = $('[name="date-427"]');
    if ($dateInputField.length) {
        $dateInputField.on("focus", (event) => {
            event.preventDefault();

            if ($dateInputField.attr("type") !== "text") return;
            $dateInputField.attr("type", "date");
            $(document.activeElement).blur();
        });
    }

    // handle selecting product images
    const productImages = document.querySelectorAll(
        ".woocommerce-product-gallery__image"
    );
    let currentActiveProductImage = null;
    productImages.forEach((productImage, i) => {
        if (productImages.length === 1) {
            document.querySelector(
                ".woocommerce-product-gallery__wrapper"
            ).style.display = "none";
            return;
        }

        if (i === 0)
            currentActiveProductImage = productImage.querySelector("img");

        const productImageAnchor = productImage.querySelector("a");
        const productImageTag = productImageAnchor.querySelector("img");

        productImageTag.srcset = "";
        productImageTag.src = productImageTag.src.replace("-100x100", "");

        productImage.addEventListener("click", (e) => {
            e.preventDefault();

            currentActiveProductImage.style.opacity = 0.25;
            currentActiveProductImage = productImageTag;
            productImageTag.style.opacity = 1;
        });
    });

    const $addToCartButtons = $(".add_to_cart_button");
    let timeouts = {};
    function addToCart(event) {
        if (event.target.matches(".add_to_cart_button")) {
            if (
                window.innerWidth <= 991 &&
                window.location.href.includes("/product/")
            ) {
                window.scroll({
                    top: 0,
                    left: 0,
                    behavior: "smooth"
                });
            }

            const $btn = $(event.target);
            const $productBtn = $btn.parents('.product-added-btn');
            $productBtn.removeClass('d-none')
            const id = event.composedPath().map((e) => e.nodeName).join(':');
            console.debug(`${id} btn path for add to cart`);
            if (timeouts[id] != null) {
                timeouts[id] = setTimeout(() => {
                    $productBtn.addClass('d-none');
                    delete timeouts[id];
                }, 10000);
            }
        }
    }

    onClick((event) => addToCart(event), document);

    function handleClick(event) {
        const $tar = $(event.target);
        if($tar.is('.menu-item-has-children > a')) {
            console.debug($tar, 'triggered click');
            $tar.click();
        }
    }

    onClick((event) => handleClick(event), document);

    // make sure the correct message is displayed
    const wooCommerceMessages = $(".woocommerce-message");
    if (wooCommerceMessages.length) {
        wooCommerceMessages.each((i, message) => {
            const $message = $(message);
            $message.css({ display: "none" });
        });
        wooCommerceMessages.last().addClass("d-block");
    }

    // add mobile optimized images in compounding page
    const $compoundingMobileContent = $(
        ".compounding-mobile-page-content .content"
    );
    if ($compoundingMobileContent.length) {
        $compoundingMobileContent.each((i, $el) => {
            const image = $el.find("img");
            image.css({ height: "auto" });
            function updateSrc(src, target, updated, ext) {
                return src.replace(target, updated).replace(/\.png|\.jpg/, ext);
            }

            const images = [
                `${image.attr("src")} 750w`,
                `${updateSrc(
                    image.attr("src"),
                    "compounding-",
                    "compounding-mob-",
                    ".jpg"
                )} 550w`
            ];

            image.attr("srcset", images.join(", "));
            image.attr("sizes", "(max-width: 550px) 550px, 750px");
            image.alt("Compounding Pharmacy Solutions");
        });
    }

    // auto-update the cart on quantity change
    let timeout;
    $(".woocommerce").on("change", "input.qty", function () {
        if (timeout == null) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(function () {
            $("[name='update_cart']").trigger("click");
            timeout = null;
        }, 500);
    });

    // complete order oer the phone
    const $orderOverPhone = $("button.place-order-over-phone");

    if ($orderOverPhone) {
        const popup = $("#popup-order-over-phone");

        let popTimeout;

        $orderOverPhone.on("click", (e) => {
            if (popTimeout == null) {
                e.preventDefault();
                popup.removeClass("d-none");
                popup.data("aos", "fade-up");
                AOS.init();

                popTimeout = setTimeout(() => {
                    popup.data("aos", null);
                    popup.removeClass("aos-init");
                    popup.removeClass("aos-animate");
                    popup.css({ pointerEvents: "all" });
                    clearTimeout(popTimeout);
                    popTimeout = null;
                }, 500);
            }
        });

        popup.find(".close-button").on("click", (e) => {
            if ($(e.currentTarget).is($(e.target.current))) {
            }
            e.preventDefault();
            popup.addClass("d-none");
        });
    }

    // fix form not submitting after showing error
    const removeProcessingStatus = () => {
        let $checkoutForm = $("form.checkout.woocommerce-checkout");
        if ($checkoutForm.hasClass("processing"))
            $checkoutForm.removeClass("processing");
    };

    const checkWishlistMessage = () => {
        const wishlistPopMessageContainer = $("#yith-wcwl-popup-message");
        if (!wishlistPopMessageContainer.length) return;
        const html = wishlistPopMessageContainer.html();
        wishlistPopMessageContainer.addClass(
            ...["wc-notice-close-button", "wish"]
        );
        wishlistPopMessageContainer.text(html).insertAfter($(html));
    };

    const activateAlertCloseButton = () => {
        const wcNoticeCloseButtons = $(".wc-notice-close-button");
        if (!wcNoticeCloseButtons.length) return;
        const isWishList = $(".wc-notice-close-button.wish");
        wcNoticeCloseButtons.each((i, wcNoticeCloseButton) => {
            if (i === wcNoticeCloseButtons.length - 1 && !isWishList)
                wcNoticeCloseButton.parent().addClass("d-block");

            wcNoticeCloseButton.on("click", (e) => {
                const alertContainer = $(e.currentTarget).parent();
                alertContainer.addClass("d-none");
            });
        });
    };

    $("form.checkout.woocommerce-checkout").bind("DOMSubtreeModified", () => {
        $checkoutForm = $("form.checkout.woocommerce-checkout");
        setTimeout(() => removeProcessingStatus(), 3500);
    });

    var observer = new MutationObserver(function(mutations, observer) {
        checkWishlistMessage();
        activateAlertCloseButton();
    });

    observer.observe(document, {
        childList: true,
        subtree: true,
        attributes: true
    });
}

main().catch((err) => console.warn(`Error loading main.js: ${err}`));
