/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
async function navigation() {
    const $ = await require('jQuery');

    console.debug(`Loading navigation`);

    function onClick(handler, el = document) {
        const handleClick = (handler) => (event) => {
            handler(event);
        };

        el.addEventListener('mouseup', handleClick(handler));
        el.addEventListener('touchstart', handleClick(handler));
    }


    const $siteNavigation = $('.main-navigation');

    if (!$siteNavigation.length) {
        console.warn($siteNavigation, 'site navigation not found');
    }

    const $menu = $siteNavigation.find('.navbar-nav > li');

    if (!$menu.length) {
        console.warn($menu, 'menu items not found, navbar-toggler hidden');
        $('.navbar-toggler.collapsed').hide();
    }

    function toggleNav (event) {
        const $target = $(event.target).closest('.navbar-toggler');
        if ($target.hasClass('navbar-toggler')) {
            const $navBar = $('.navbar-collapse.collapse');
            const isOpen = $navBar.is('.show');
            if (isOpen) {
                console.info(`${$target} nav closed`);
                $siteNavigation.removeClass('toggled');
                $navBar.hide('slow', () => {
                    $navBar.removeClass('show');
                });
                $(document.body).removeClass('overflow-hidden');
                $target.attr('aria-expanded', 'false');
            } else {
                console.info(`${$target} nav opened`);
                $siteNavigation.addClass('toggled');
                $navBar.show('fast', () => {
                    $navBar.addClass('show');
                });
                $(document.body).addClass('overflow-hidden');
                $target.attr('aria-expanded', 'true');
            }
        }
    }

    onClick((event) => toggleNav(event), document);

    // Get all the link elements with children within the menu.

    function toggleFocus(event) {
        if (event.target.matches('.nav-item.dropdown')) {
            event.preventDefault();
            $target = $(event.target);
            console.info(`${target} dropdown clicked`);
            const $dropdown = $('.nav-item.dropdown');
            $dropdown.filter('.focus').each((i, el) => {
                $el = $(el);
                if (!$el.is($target)) {
                    $el.removeClass('focus');
                }
            });

            if (!$target.hasClass('focus')) {
                $target.addClass('focus');
            }
        }
    }

    onClick((event) => toggleFocus(event), document);


}

navigation(this).catch((err) => console.warn(`Error loading navigation: ${err.msg}`));

