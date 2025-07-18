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

        const $toggler = $(event.target);
        const $siteNavigation = $(".main-navigation");

        if ($toggler.is('.close-button')) {
            $siteNavigation.removeClass("toggled");
            $(document.body).removeClass("overflow-hidden");
            $toggler.attr("aria-expanded", "false");
        } else {
            const $navBar = $(".navbar-collapse.collapse");
            const isOpen = $siteNavigation.hasClass("toggled");
            if (isOpen) {
                $siteNavigation.removeClass("toggled");
                $(document.body).removeClass("overflow-hidden");
                $toggler.attr("aria-expanded", "false");
            } else {
                toggling = Date.now() + 500;
                $siteNavigation.addClass("toggled");
                $toggler.attr("aria-expanded", "true");
                $navBar.show("slow", () => {
                    $(document.body).addClass("overflow-hidden");
                });
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
