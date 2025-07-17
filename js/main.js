(function() {

async function main() {
    const $ = await require("jQuery");

    function onClick(handler, el = document) {
        const handleClick = (event) => {
            handler(event);
        };

        el.addEventListener("mousedown", (event) => handleClick(event));
        el.addEventListener("touchend", (event) => handleClick(event));
    }

    let mouseTimeout;
    function handleMouseOut(event) {
        mouseTimeout = setTimeout(() => {
            const $img = $(".hero-image");
            $img.attr("data-hero-image", "home");
            clearTimeout(mouseTimeout);
            mouseTimeout = null;
        }, 500);
    }

    function handleMouseOver(event) {
        if (mouseTimeout) {
            clearTimeout(mouseTimeout);
            mouseTimeout = null;
        }

        const $tar = $(event.target);
        const data = $tar.attr("data-hero-trigger");
        const div = document.createElement("div");
        div.classList.add("hero-image");
        div.setAttribute("data-hero-image", data);
        div.style.display = "none";
        const heroImage = document.querySelector(".hero .hero-image");
        heroImage.parentNode.insertBefore(div, heroImage);
        const styles = window.getComputedStyle(div);
        const url = styles["background-image"].replace(/url\(["']?/, "").replace(/["']?\)/, "");
        const image = new Image();
        image.addEventListener("load", () => {
            const $img = $(".hero-image");
            $img.attr("data-hero-image", data);
        });
        div.remove();
        image.src = url;
    }

    $('a[data-hero-trigger]').on('mouseover', handleMouseOver).on('mouseout', handleMouseOut);

    require("Splide").then((Splide) => {
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
    });

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

    let timeouts = {};
    function addToCart(event) {
        if (event.target.matches(".add_to_cart_button")) {
            if (
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
            $tar.click();
        }
    }

    onClick((event) => handleClick(event), document);

    // make sure the correct message is displayed
    const $wooCommerceMessages = $(".woocommerce-message");
    if ($wooCommerceMessages) {
        $wooCommerceMessages.each((i, message) => {
            const $message = $(message);
            $message.css({ display: "none" });
        });
        $wooCommerceMessages.last().addClass("d-block");
    }

    // add mobile optimized images in compounding page
    const $compoundingMobileContent = $(
        ".compounding-mobile-page-content .content"
    );
    if ($compoundingMobileContent) {
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

    var observer = new MutationObserver(function(mutations, ob) {
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

})();

document.addEventListener('DOMContentLoaded', () => {
    const config = { childList: true, subtree: true, attributeFilter: 'deferred' };
    const callback = (mutationList, observer) => {
        for (const mutation of mutationList) {
            if (["childList", "subtree"].includes(mutation.type)) {
                const scripts = document.querySelectorAll('script:not([async="true"])');
                scripts.forEach((script) => {
                    if (script.getAttribute('src').test(/[backbone|i18n|common|mouse|draggable|Marionette|wp|googlesitekit|core]/gi))
                        return;
                    console.log(script, `script found without async attribute`);
                    script.setAttribute('async', true);
                });
            }
        }
    }
    const observer = new MutationObserver(callback);
    observer.observe(document, config);
});

