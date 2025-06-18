/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(async function () {
    if(window.navLoaded != null) return false;
    window.navLoaded = true;

    function onClick(handler, el = document) {
        function handleClick(event) {
            event.preventDefault();
            handler(event);
        }

        el.addEventListener("mouseup", (event) => handleClick(event));
        el.addEventListener("touchend", (event) => handleClick(event));
    }

    const $ = await require("jQuery");

    const siteNavigation = $("#site-navigation");
    console.log(`found site nav: ${siteNavigation}`);

    if (!siteNavigation.length) {
        console.warn("siteNavigation not found");
    }

    const buttons = $("button.navbar-toggler");

    if (!buttons.length) {
        console.warn("buttons not found");
    }

    const menu = siteNavigation.find("ul");

    if (!menu.length) {
        buttons.first().css({ display: "none" });
    }

    if (!menu.first().hasClass("nav-menu")) {
        menu.first().addClass("nav-menu");
    }

    function handleNavToggle(event) {
        event.preventDefault();

        console.log('nav menu toggled');

        $('.main-navigation').toggleClass("toggled");
        $('.navbar-collapse.collapse').toggleClass('show');
        $(document.body).toggleClass('overflow-hidden');
        const $btn = $(event.target);
        $btn.attr(
            "aria-expanded",
            $btn.attr("aria-expanded") === "true" ? "false" : "true"
        );
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    buttons.each((i, btn) => {
        onClick((event) => handleNavToggle(event), btn);
    });

    // Get all the link elements with children within the menu.
    const $dropdown = $(".nav-item.dropdown");

    function toggleFocus(event) {
        $dropdown.each((i, el) => $(el).removeClass('focus'));

        $(event.target).addClass('focus');
    }

    $dropdown.each((i, el) => {
        onClick((event) => toggleFocus(event), el);
    });
})();
