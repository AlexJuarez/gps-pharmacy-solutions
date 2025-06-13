

jQuery( function($) {
  $('[data-hero-trigger]')
    .on('mouseover', function() {
      let $this = $(this)
      $('.hero-image').replaceWith('<div class="hero-image" data-hero-image="' + $this.data('hero-trigger') + '"></div>')
    })
    .on('mouseout', function() {
      $('.hero-image').replaceWith('<div class="hero-image" data-hero-image="home"></div>')
    })
})


window.onload = () => {
    AOS.init();
    const carousel = document.querySelector('#splide');
    if (carousel) {
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

    const pccaLogo = document.querySelector('.navbar-collapse .pcca-logo');
    const scopicTitle = document.querySelector('.navbar-collapse .scopic-title');

    const swapDrawerLogo = () => {
        if (innerWidth <= 991) {

            // swap the logo with the description when the drawer is opened
            // to match the design
            pccaLogo.parentNode.insertBefore(pccaLogo, pccaLogo.parentNode.firstChild);
        } else {
            scopicTitle.parentNode.insertBefore(scopicTitle, scopicTitle.parentNode.firstChild);
        }
    }

    // convert text to date
    const dateInputField = document.querySelector('[name="date-427"]');
    if (dateInputField) {
        dateInputField.addEventListener('focus', e => {
            if (dateInputField.getAttribute('type') !== 'text') return;
            dateInputField.setAttribute('type', 'date');
            document.activeElement.blur();
        });
    }

    swapDrawerLogo();

    // on tablets and mobile
    window.onresize = () => {
        swapDrawerLogo();
    }

    const navbarToggler = document.querySelector('button.navbar-toggler');
    navbarToggler.addEventListener('click', () => {
        document.body.classList.add('overflow-hidden');
    });

    // close the drawer when user clicks outside it
    document.querySelector('.navbar-toggled-overly').addEventListener('click', e => {
        const navMenu = document.querySelector('.navbar-collapse.collapse.show');
        openDrawerCLoseButton.click();
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

            mainProductImage = productImageContainer.querySelector('img');
            mainProductImage.src = productImageTag.dataset.large_image;
            mainProductImage.srcset = '';
        });
    });

    // preload background images
    const preloadImages = (imagesArray) => {
        const images = [];
        for (var i = 0; i < imagesArray.length; i++) {
            images[i] = new Image();
            images[i].src = imagesArray[i].url;
        }
    }

    // handle close button clicks
    const openDrawerCLoseButton = document.querySelector('#custom-close-button');
    openDrawerCLoseButton.addEventListener('click', () => {
        navbarToggler.click();
        document.body.classList.remove('overflow-hidden');
    });

    const addToCartButtons = document.querySelectorAll('.add_to_cart_button');
    const removeFromCartButtons = document.querySelectorAll('.product-remove .remove');
    if (addToCartButtons.length) {
        addToCartButtons.forEach((addToCartButton) => {
            addToCartButton.addEventListener('click', e => {
                if (innerWidth <= 991 && location.href.includes('/product/')) window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
                const path = e.composedPath();
                let productAddedButton = path[2].querySelector('.product-added-btn');
                if (!productAddedButton) productAddedButton = document.querySelector('.product-added-btn');
                productAddedButton.classList.remove('d-none');
                setTimeout(() => {
                    productAddedButton.classList.add('d-none');
                }, 10000);
            })
        });
    }

    const resetHomepageBackgroundImage = (homepageContainer) => {
        homepageContainer.style.backgroundImage = `url(${themeFileUri}/img/homepage/${outerWidth < 705 ? '1-mob' : '1'}.jpg)`;
        homepageContainer.style.backgroundPosition = 'center';
    }

    // fix: GPSWR-4
    document.querySelectorAll('.menu-item-has-children > a').forEach(item => {
        item.addEventListener('touchstart', e => {
            item.click();
        });
    });

    const activateOnHoverBackgroundImageChange = (categoryName, backgroundImagesList, homepageContainer) => {

        document.querySelectorAll(`.gps-info-box.gps-${categoryName}`).forEach((infoBox, i) => {
            infoBox.addEventListener('mouseover', () => {
                const boxLinks = infoBox.querySelectorAll('.gps-info-box-back > a');
                boxLinks.forEach((link, j) => {
                    link.addEventListener('mouseover', e => {
                        e.stopPropagation();
                        homepageContainer.style.backgroundImage = `url(${backgroundImagesList[j].url})`;
                        homepageContainer.style.backgroundPosition = `${backgroundImagesList[j].backgroundPosition}`;
                    });
                });
            });

            // return back to the default background
            infoBox.addEventListener('mouseover', () => {
                resetHomepageBackgroundImage(homepageContainer);
            });
        });
    }

    /**
     * Homepage on-hover background image change.
     * 
     * @todo add dynamic images support
     */
    const homepageBackgroundImageChange = () => {
        const compoundingBackgroundImages = [
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/compounding-1.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/compounding-2.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/compounding-3.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/compounding-4.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/compounding-5.jpg`
            }
        ];
        preloadImages(compoundingBackgroundImages);

        const hospiceBackgroundImages = [
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/hospice-1.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/hospice-2.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/hospice-3.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/hospice-4.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/hospice-5.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/homepage/hospice-6.jpg`
            }
        ];
        preloadImages(hospiceBackgroundImages);

        const shopBackgroundImages = [
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/shop/homepage-cover.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/shop/homepage-cover.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/shop/homepage-cover.jpg`
            },
            {
                backgroundImage: 'center',
                url: `${themeFileUri}/img/shop/homepage-cover.jpg`
            },
        ];
        preloadImages(shopBackgroundImages);

        const homepageContainer = document.querySelector('.main.homepage');
        resetHomepageBackgroundImage(homepageContainer);
        activateOnHoverBackgroundImageChange('compounding', compoundingBackgroundImages, homepageContainer);
        activateOnHoverBackgroundImageChange('hospice', hospiceBackgroundImages, homepageContainer);
        activateOnHoverBackgroundImageChange('shop', shopBackgroundImages, homepageContainer);
    }

    // execute this when it's the homepage
    if (typeof themeFileUri !== 'undefined') homepageBackgroundImageChange();

    // make sure the correct message is displayed
    const wooCommerceMessages = document.querySelectorAll('.woocommerce-message');
    if (wooCommerceMessages.length) {
        wooCommerceMessages.forEach(message => {
            message.style.display = 'none';
        });
        wooCommerceMessages[wooCommerceMessages.length - 1].classList.add('d-block');
    }

    // add mobile optimized images in compounding page
    const compoundingMobileContent = document.querySelectorAll('.compounding-mobile-page-content .content');
    if (compoundingMobileContent.length) {
        if (innerWidth > 991) return;
        compoundingMobileContent.forEach(pieceOfContent => {
            const image = pieceOfContent.querySelector('img');
            image.style.height = 'auto';
            image.src = image.src.replace('compounding-', 'compounding-mob-').replace('.png', '.jpg');
        });
    }

    // auto-update the cart on quantity change
    let timeout;
    jQuery(function ($) {
        $('.woocommerce').on('change', 'input.qty', function () {

            if (timeout !== undefined) {
                clearTimeout(timeout);
            }

            timeout = setTimeout(function () {
                $("[name='update_cart']").trigger("click");
            }, 500);

        });
    });

    // complete order oer the phone
    const orderOverPhone = document.querySelector('button.place-order-over-phone');

    if (orderOverPhone) {
        const popup = document.querySelector('#popup-order-over-phone');

        orderOverPhone.addEventListener('click', e => {
            e.preventDefault();
            popup.classList.remove('d-none');
            popup.dataset.aos = 'fade-up';
            AOS.init();

            setTimeout(() => {
                popup.dataset.aos = '';
                popup.classList.remove('aos-init');
                popup.classList.remove('aos-animate');
                popup.style.pointerEvents = 'all';
            }, 500);
        });

        popup.querySelector('.close-button').addEventListener('click', e => {
            e.preventDefault();
            popup.classList.add('d-none');
        });
    }

    // make cards clickable
    const cards = document.querySelectorAll('.gps-info-box');
    if (cards.length) {
        cards.forEach(card => {
            const pageUrlTag = card.querySelector('.gps-info-box-front .button a');
            const pageUrl = pageUrlTag.href;
            if (innerWidth <= 991) card.addEventListener('click', e => {
                e.preventDefault();
                location.href = pageUrl;
            });
        })
    }

    // fix form not submitting after showing error
    const removeProcessingStatus = () => {
        $checkoutForm = jQuery('form.checkout.woocommerce-checkout');
        if ($checkoutForm.is('.processing')) $checkoutForm.removeClass('processing');
    }
    
    const checkWishlistMessage = () => {
        const wishlistPopMessageContainer = document.querySelector('#yith-wcwl-popup-message');
        if (!wishlistPopMessageContainer) return;
        wishlistPopMessageContainer.innerHTML = '<div class="wc-notice-close-button wish">x</div>' + wishlistPopMessageContainer.innerHTML;
    }

    const activateAlertCloseButton = () => {
        const wcNoticeCloseButtons = document.querySelectorAll('.wc-notice-close-button');
        if (!wcNoticeCloseButtons.length) return;
        const isWishList = document.querySelector('.wc-notice-close-button.wish');
        wcNoticeCloseButtons.forEach((wcNoticeCloseButton, i) => {

            if (i === wcNoticeCloseButtons.length - 1 && !isWishList) wcNoticeCloseButton.parentNode.classList.add('d-block');

            wcNoticeCloseButton.addEventListener('click', e => {
                const alertContainer = e.currentTarget.parentNode;
                alertContainer.classList.add('d-none');
            });
        });
    }
    
    checkWishlistMessage();

    jQuery('form.checkout.woocommerce-checkout').bind('DOMSubtreeModified', () => {
        $checkoutForm = jQuery('form.checkout.woocommerce-checkout');
        setTimeout(removeProcessingStatus, 3500);
    });

    jQuery('body').bind('DOMSubtreeModified', () => {
        activateAlertCloseButton();
    });
}
