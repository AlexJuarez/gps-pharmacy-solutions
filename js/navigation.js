/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function() {



async function navigation() {
    const $ = await require("jQuery");


    function onClick(handler, el = document) {
        el.addEventListener("mousedown", handler);
        el.addEventListener("touchend", handler);
    }

    const $siteNavigation = $(".main-navigation");

    if (!$siteNavigation.length) {
        console.warn($siteNavigation, "site navigation not found");
    }

    const $menu = $siteNavigation.find(".navbar-nav > li");

    if (!$menu.length) {
        console.warn($menu, "menu items not found, navbar-toggler hidden");
        $(".navbar-toggler.collapsed").css({ display: "none" });
    }

    function handleAddToCart(event) {
        console.log(window.location.origin + "/cart/");
        const url = new URL(location);
        window.history.pushState({}, "", url);
        window.location.assign(window.location.origin + "/cart/");
    }

    document.querySelectorAll('.add_to_cart_button').forEach((node) => {
        onClick((event) => handleAddToCart(event), node);
    });

    let toggling = Date.now();
    function toggleNav(event) {
        if (Date.now() < toggling) {
            return;
        }

        const $closeBtn = $(event.target).is('.close-button') || $(event.target).closest('.close-button');
        const $toggleBtn = $(event.target).is('.navbar-toggler') || $(event.target).closest('.navbar-toggler');
        const $siteNavigation = $(".main-navigation");
        const $navBar = $(".navbar-collapse.collapse");

        if ($closeBtn.length) {
            toggling = Date.now() + 500;
            $navBar.hide(300, () => {
                $siteNavigation.removeClass("toggled");
                $closeBtn.attr("aria-expanded", "false");
                $(document.body).removeClass("overflow-hidden");
            });
        } else {
            const isOpen = $siteNavigation.hasClass("toggled");
            if (isOpen) {
                toggling = Date.now() + 500;
                $navBar.hide(300, () => {
                    $siteNavigation.removeClass("toggled");
                    $toggleBtn.attr("aria-expanded", "false");
                    $(document.body).removeClass("overflow-hidden");
                });
            } else {
                toggling = Date.now() + 500;
                $navBar.show(300, () => {
                    $siteNavigation.addClass("toggled");
                    $toggleBtn.attr("aria-expanded", "true");
                    $closeBtn.attr("aria-expanded", "true");
                    $(document.body).addClass("overflow-hidden");
                }, 400);
            }
        }
    }

    document.querySelectorAll('.navbar-toggler').forEach((el, i) => {
        onClick(toggleNav, el);
    })


    // Get all the link elements with children within the menu.

    function toggleFocus(event) {
        if (window.loading) {
            return;
        }

        $target = $(event.target);
        $dropdown = $(event.target).parents(".nav-item.dropdown");
        if ($dropdown.length) {
            $('.nav-item.dropdown').filter(".focus").each((i, el) => {
                $el = $(el);
                if (!$el.is($dropdown)) {
                    $el.removeClass("focus");
                }
            });

            $dropdown.is(":not(.focus)") && $dropdown.addClass("focus");
        }

    }

    onClick((event) => toggleFocus(event), document);
}

navigation(this).catch((err) =>
    console.log(`Error loading navigation: ${err.msg}`)
);
})();
