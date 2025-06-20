/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(async function () {
    if (window.navLoaded != null) return false;
    window.navLoaded = true;

    function onClick(handler, el = document) {
        const handleClick = ((event) => {
            event.preventDefault();
            handler.call(this, event);
        }).bind(this);

        let loaded = false;

        $(document).on('DOMNodeInserted', (e) => {
            if ($(e.target).is(el) && !loaded) {
                el.addEventListener("mouseup", handleClick);
                el.addEventListener("touchstart", handleClick);
                loaded = true;
            }
        })

        $(document).on('DOMNodeRemoved', (e) => {
            if ($(e.target).is(el) && !loaded) {
                el.removeEventListener("mouseup", handleClick);
                el.removeEventListener("touchstart", handleClick);
                loaded = false;
            }
        })

        el.addEventListener("mouseup", handleClick);
        el.addEventListener("touchstart", handleClick);
        loaded = true;
    }

    const $ = await require("jQuery");

    const siteNavigation = $(".main-navigation");
    console.log(`found site nav: ${siteNavigation}`);

    if (!siteNavigation.length) {
        console.warn("siteNavigation not found");
    }

    const menu = siteNavigation.find("ul");

    if (!menu.length) {
        $('.navbar-toggler').first().hide();
    }

    if (!menu.find(".nav-menu").length) {
        menu.first().addClass("nav-menu");
    }

    function isOpen() {
        return siteNavigation.hasClass("toggled");
    }

    function handleNavOpen(event) {
        siteNavigation.addClass("toggled");

        const navBar = siteNavigation.find(".navbar-collapse.collapse");
        navBar.show();
        navBar.addClass('show');

        $(document.body).addClass("overflow-hidden");

        $btn.attr("aria-expanded", "true");
    }

    function handleNavClose(event) {
        siteNavigation.removeClass("toggled");

        const navBar = siteNavigation.find(".navbar-collapse.collapse");
        navBar.hide();
        navBar.removeClass('show')

        $(document.body).removeClass("overflow-hidden");

        $btn.attr("aria-expanded", "false");
    }

    function toggleNav(event) {
        if ($(event.target).is('.navbar-toggler')){
            if (isOpen()) {
                handleNavClose(event);
            } else {
                handleNavOpen(event);
            }
        }
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    onClick((event) => toggleNav(event), document);

    // Get all the link elements with children within the menu.

    function toggleFocus(event) {
        $el = $(event.target);
        if ($el.is(".dropdown:not(.focus)")) {
            const $dropdown = $(".nav-item.dropdown");
            $dropdown.each((i, el) => $(el).removeClass("focus"));
            $(event.target).addClass("focus");
        }
    }

    $dropdown.each((i, el) => {
        onClick((event) => toggleFocus(event), el);
    });
})();
