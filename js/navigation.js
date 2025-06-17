/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
async function require(target) {
    console.log(`Loading ${target}`);

    const loaded = new Set();

    let res, rej;
    const promise = new Promise((resolve, reject) => {
        res = resolve;
        rej = reject;
     }).catch((err) => {
        console.error(`Error loading ${target}:`, err);
     });

    function require(target) {
        const scripts = document.querySelectorAll('script[src]');
        for (const script of scripts) {
            if (loaded.has(script.src))
                continue;


            if (script.readyState === 'complete')
                loaded.add(script.src);

            if (script.src.toLowerCase().includes(target.toLowerCase()) && window[target] != null) {
                console.log(`${target} script loaded successfully:`, script.src);
                res(window[target]);
                return;
            }
        }

        if (window.readyState === 'complete') {
            rej(new Error(`Failed to load ${target} script`));
            return;
        }
    }


    document.addEventListener('DOMContentLoaded', () => {
        require(target);
    }, { once: true });

    document.addEventListener('readystatechange', (event) => {
        require(target);
    });

    return promise;
}

const jQuery = await require('jQuery');

function onClick(handler, el = document) {
    function handleClick(event) {
        event.preventDefault();

        handler.call(this, event);
    }

    el.addEventListener("mouseup", (event) => handleClick(event));
    el.addEventListener("touchend", (event) => handleClick(event));
}

(async function() {
    const $ = await require('jQuery');

    const siteNavigation = $("site-navigation");

    if (!siteNavigation.length) return;

    const button = siteNavigation.find("button");

    if (!button.length) return;

    const menu = siteNavigation.find("ul");

    if (!menu.length) {
        button.first().css({ display: "none" });
        return;
    }

    if (!menu.first().hasClass("nav-menu")) {
        menu.first().addClass("nav-menu");
    }

    function handleNavToggle(event) {
        siteNavigation.toggleClass("toggled");

        if ($(event.target).attr("aria-expanded") === "true") {
            $(event.target).attr("aria-expanded", "false");
        } else {
            $(event.target).attr("aria-expanded", "true");
        }
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    onClick((event) => handleNavToggle(event), button);

    // Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
    function closeNavigation(event) {
        const isClickInside = siteNavigation.has(event.target) || siteNavigation.has(event.currentTarget);

        if (!isClickInside) {
            siteNavigation.removeClass("toggled");
            button.attr("aria-expanded", "false");
        }
    }

    onClick((event) => closeNavigation(event), document);


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

