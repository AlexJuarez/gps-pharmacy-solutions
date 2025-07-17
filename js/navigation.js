/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function() {



async function navigation() {
    const $ = await require("jQuery");

    console.debug(`Loading navigation`);

    function debounce (fn, ts = 250) {
        let timer;
        return (event) => {
            if (timer == null) {
                timer = setTimeout(() => {
                    fn.call(this, event);
                    clearTimeout(timer);
                    timer = null;
                }, ts);
            } else {
                fn.call(this, event)
            }
        };
    }

    function onClick(handler, el = document, opts = {}) {

        const handleClick = (event) => {
            handler(event);
        };

        const fn = debounce(handleClick, 250);

        el.addEventListener("click", fn, opts);
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
        window.location.replace(window.location.origin + "/cart/");
    }

    document.querySelectorAll('.add_to_cart_button').forEach((node) => {
        onClick((event) => handleAddToCart(event), node);
    });

    let toggling = Date.now();
    function toggleNav(event) {
        const $target = $(event.target);

        if ($target.is('a[href]').length) {
            window.loading = true;
            window.addEventListener('beforeunload', (event) => {
                window.loading = false;
             });
        } else if (Date.now() > toggling) {
            const $toggler = $target.closest(".navbar-toggler");
            if ($toggler.length) {
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
    }

    onClick((event) => toggleNav(event), document);

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
