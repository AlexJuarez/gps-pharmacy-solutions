/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
function onClick(handler, el = document) {
    function handleClick(event) {
        event.preventDefault();
        handler.call(this, event);
    }

    el.addEventListener("click", (event) => handleClick(event));
    el.addEventListener("touchend", (event) => handleClick(event));
}

(async function () {
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
        event.stopPropagation();

        siteNavigation.toggleClass("toggled");
        siteNavigation.find(".navbar-collapse").toggleClass("show");
        const $btn = $(event.target);
        $btn.attr(
            "aria-expanded",
            $btn.attr("aria-expanded") === "true" ? "false" : "true"
        );
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    buttons.each((i, btn) => {
        console.log("Buttons", btn);
        onClick((event) => handleNavToggle(event), btn);
    });

    // Get all the link elements within the menu.
    const links = menu.find("a");

    // Get all the link elements with children within the menu.
    const $dropdown = $(".nav-item.dropdown");

    function toggleFocus(event) {
        event.preventDefault();

        $dropdown.filter('.focus').each((i, el) => $(el).removeClass('focus'));
        $(event.target).addClass('focus');
    }

    $dropdown.each((i, el) => {
        const $el = $(el);
        onClick((event) => toggleFocus(event), $el);
    });

    /**
     * Sets or removes .focus class on an element.
     */
})(jQuery);
