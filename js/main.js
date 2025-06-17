
(async function () {
    const $ = await require('jQuery');
    const Splide = await require('Splide');
    const AOS = await require('AOS');

    $('[data-hero-trigger]')
        .on('mouseover', function(event) {
            $('.hero-image').attr('data-hero-image', $(event.target).data('heroTrigger'))
        })
        .on('mouseout', function() {
            $('.hero-image').attr('data-hero-image', 'home');
        })

    AOS.init();
    const carousel = $('#splide');
    if (carousel.length) {
        new Splide('#splide', {
            'type': 'loop',
            'width': '80%',
            'perPage': 3,
            'breakpoints': {
                991: { 'perPage': 1 }
            },
            'arrowPath': 'M1.75 36.388L31 19.5 1.75 2.613v33.775z'
        }).mount();
    }

    const $pccaLogo = $('.navbar-collapse .pcca-logo');
    const $scopicTitle = $('.navbar-collapse .scopic-title');

    const swapDrawerLogo = (event) => {
        if (event.window.innerWidth <= 991) {
            // swap the logo with the description when the drawer is opened
            // to match the design
            $pccaLogo.insertBefore($pccaLogo.parent().children().first());
        } else {
            $scopicTitle.insertBefore($scopicTitle.parent().children().first());
        }
    }

    // convert text to date
    const $dateInputField = $('[name="date-427"]');
    if ($dateInputField.length) {
        $dateInputField.on('focus', event => {
            event.preventDefault();


            if ($dateInputField.attr('type') !== 'text') return;
            $dateInputField.attr('type', 'date');
            $(document.activeElement).blur();
        });
    }

    // on tablets and mobile
    window.addEventListener('resize', (event) => {
        swapDrawerLogo(event);
    });

    window.dispatchEvent(new Event('resize'));

    const $navbarToggler = $('button.navbar-toggler');
    $navbarToggler.on('click', (event) => {
        event.preventDefault();

        $(document.body).toggleClass('overflow-hidden');
        const $navMenu = $('.navbar-collapse.collapse.show');
        $navMenu.addClass('show');
    });

    // close the drawer when user clicks outside it
    $('.navbar-toggled-overly').on('click', e => {
        e.preventDefault();
        if (!$('.navbar-toggled-overly').has(e.currentTarget).length) {
            const $navMenu = $('.navbar-collapse.collapse.show');
            $navMenu.removeClass('show');
        }

    });

    // handle selecting product images
    const productImages = document.querySelectorAll('.woocommerce-product-gallery__image');
    const productImageContainer = document.querySelector('.product-image-container');
    let currentActiveProductImage = null;
    productImages.forEach((productImage, i) => {
        if (productImages.length === 1) {
            document.querySelector('.woocommerce-product-gallery__wrapper').style.display = 'none';
            return;
        }

        if (i === 0) currentActiveProductImage = productImage.querySelector('img');

        const productImageAnchor = productImage.querySelector('a');
        const productImageTag = productImageAnchor.querySelector('img');

        productImageTag.srcset = '';
        productImageTag.src = productImageTag.src.replace('-100x100', '');

        productImage.addEventListener('click', e => {
            e.preventDefault();

            currentActiveProductImage.style.opacity = 0.25;
            currentActiveProductImage = productImageTag;
            productImageTag.style.opacity = 1;
        });
    });


    const $addToCartButtons = $('.add_to_cart_button');
    const $removeFromCartButtons = $('.product-remove .remove');
    if ($addToCartButtons.length) {
        $addToCartButtons.each(function(i, btn) {
            $(btn).on('click', e => {
                if (window.innerWidth <= 991 && window.location.href.includes('/product/')) window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
                const path = e.composedPath();
                let productAddedButton = null;
                if (path[2]) {
                    productAddedButton = $(path[2]).find('.product-added-btn');
                }
                if (!productAddedButton || !productAddedButton.length) {
                    productAddedButton = $('.product-added-btn');
                }
                productAddedButton.removeClass('d-none');
                setTimeout(() => {
                    productAddedButton.addClass('d-none');
                }, 10000);
            });
        });
    }

    // fix: GPSWR-4
    $('.menu-item-has-children > a').each((i, $item) => {
        $item.on('touchend', e => {
            $item.trigger('click');
        });
    });

    // execute this when it's the homepage
    // if (typeof themeFileUri !== 'undefined') homepageBackgroundImageChange();

    // make sure the correct message is displayed
    const wooCommerceMessages = $('.woocommerce-message');
    if (wooCommerceMessages.length) {
        wooCommerceMessages.each((i, $message) => {
            $message.css({ display: 'none' });
        });
        wooCommerceMessages.last().addClass('d-block');
    }

    // add mobile optimized images in compounding page
    const $compoundingMobileContent = $('.compounding-mobile-page-content .content');
    if ($compoundingMobileContent.length) {
        $compoundingMobileContent.each((i, $el) => {
            const image = $el.find('img');
            image.css({height: 'auto'});
            function updateSrc(src, target, updated, ext) {
                return src.replace(target, updated).replace(/\.png|\.jpg/, ext);
            }

            const images = [
                `${image.attr('src')} 750w`,
                `${updateSrc(image.attr('src'), 'compounding-', 'compounding-mob-', '.jpg')} 550w`
            ];


            image.attr('srcset', images.join(', '));
            image.attr('sizes', '(max-width: 550px) 550px, 750px');
            image.alt('Compounding Pharmacy Solutions');
        });
    }

    // auto-update the cart on quantity change
    let timeout;
    $('.woocommerce').on('change', 'input.qty', function () {

        if (timeout !== undefined) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(function () {
            $("[name='update_cart']").trigger("click");
        }, 500);
    });

    // complete order oer the phone
    const $orderOverPhone = $('button.place-order-over-phone');

    if ($orderOverPhone) {
        const popup = $('#popup-order-over-phone');

        $orderOverPhone.on('click', e => {
            e.preventDefault();
            popup.removeClass('d-none');
            popup.data('aos', 'fade-up');
            AOS.init();

            setTimeout(() => {
                popup.data('aos', null);
                popup.removeClass('aos-init');
                popup.removeClass('aos-animate');
                popup.css({pointerEvents: 'all'});
            }, 500);
        });

        popup.find('.close-button').on('click', e => {
            e.preventDefault();
            popup.addClass('d-none');
        });
    }

    // make cards clickable
    const cards = $('.gps-info-box');
    if (cards.length) {
        cards.each((i, $card) => {
            const $pageUrlTag = $card.find('.gps-info-box-front .button a');
            const pageUrl = $pageUrlTag.first().attr('href');
            if (innerWidth <= 991) $card.on('click', e => {
                //e.preventDefault();
                location.href = pageUrl;
            });
        })
    }

    // fix form not submitting after showing error
    const removeProcessingStatus = () => {
        let $checkoutForm = $('form.checkout.woocommerce-checkout');
        if ($checkoutForm.hasClass('processing')) $checkoutForm.removeClass('processing');
    }

    const checkWishlistMessage = () => {
        const wishlistPopMessageContainer = $('#yith-wcwl-popup-message');
        if (!wishlistPopMessageContainer.length) return;
        const html = wishlistPopMessageContainer.html();
        wishlistPopMessageContainer.addClass(...['wc-notice-close-button', 'wish']);
        wishlistPopMessageContainer.text(html);
        wishlistPopMessageContainer.insertAfter($(html));
    }

    const activateAlertCloseButton = () => {
        const wcNoticeCloseButtons = $('.wc-notice-close-button');
        if (!wcNoticeCloseButtons.length) return;
        const isWishList = $('.wc-notice-close-button.wish');
        wcNoticeCloseButtons.each((i, wcNoticeCloseButton) => {
            if (i === wcNoticeCloseButtons.length - 1 && !isWishList) wcNoticeCloseButton.parent().addClass('d-block');

            wcNoticeCloseButton.on('click', e => {
                const alertContainer = $(e.currentTarget).parent();
                alertContainer.addClass('d-none');
            });
        });
    }

    checkWishlistMessage();

    $('form.checkout.woocommerce-checkout').bind('DOMSubtreeModified', () => {
        $checkoutForm = $('form.checkout.woocommerce-checkout');
        setTimeout(() => removeProcessingStatus(), 3500);
    });

    $(window.body).on('DOMSubtreeModified', () => {
        activateAlertCloseButton();
    });

});

