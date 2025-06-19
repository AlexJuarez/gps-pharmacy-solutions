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
            handler.call(this, event);
        }

        el.addEventListener("mouseup", (event) => handleClick(event));
        el.addEventListener("touchstart", (event) => handleClick(event));
    }

    const $ = await require("jQuery");

    const siteNavigation = $('.main-navigation');
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
        siteNavigation.is('.toggled') ? siteNavigation.removeClass("toggled") : siteNavigation.addClass("toggled");
        const navBar = siteNavigation.find('.navbar-collapse.collapse');
        navBar.has(':not(.show)').show();
        navBar.has('.show') ? navBar.removeClass('show') : navBar.addClass('show');
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
