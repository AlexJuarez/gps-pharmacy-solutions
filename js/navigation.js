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

(async function() {
    const $ = await require('jQuery');

    const siteNavigation = $("#site-navigation");
    console.log(`found site nav: ${siteNavigation}`);

    if (!siteNavigation.length) {
        console.warn('siteNavigation not found')
    };

    const buttons = $("button.navbar-toggler");

    if (!buttons.length) {
        console.warn('buttons not found')
    };

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
        siteNavigation.find('.navbar-collapse').toggleClass("show");
        const $btn = $(event.target);
        $btn.attr("aria-expanded", $btn.attr("aria-expanded") === "true" ? "false" : "true");
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    buttons.each((i, btn) => {
        const $btn = $(btn);
        console.log('Buttons', btn);
        onClick((event) => handleNavToggle(event), btn);
    });


    // Get all the link elements within the menu.
    const links = menu.find("a");

    // Get all the link elements with children within the menu.
    const linksWithChildren = menu.find(
        ".menu-item-has-children > a, .page_item_has_children > a"
    );

    // Toggle focus each time a menu link is focused or blurred.
    for (const link of links) {
        link.addEventListener("focus", (event) => toggleWeb(event), true);
        link.addEventListener("blur", (event) => toggleWeb(event), true);
    }

    // Toggle focus each time a menu link with children receive a touch event.
    for (const link of linksWithChildren) {
        onClick((event) => toggleTouch(event), link);
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleWeb(event) {
        const root = $(event.target).parentsUtil('.nav-menu');
        if (!root.length) return;
        root.find('li').each((_, el) => {
            $(el).toggleClass("focus");
        });
    }

    function toggleTouch(event) {
        const $menuItem = $(event.target);
        if (!$menuItem.length || !$menuItem.parent().hasClass("menu-item-has-children") && !$menuItem.parent().hasClass("page_item_has_children")) {
            return;
        }
        const links = $menuItem.parent().children("a");
        if (links.length === 1) {
            return;
        }
        event.preventDefault();

        links.each((_, link) => {
            const $link = $(link);
            if (!$menuItem.is($link)) {
                $link.removeClass("focus");
            }

            $menuItem.toggleClass("focus");
        });
    }
})(jQuery);

