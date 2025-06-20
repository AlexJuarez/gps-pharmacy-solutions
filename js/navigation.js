/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(async function () {
    const $ = await require('jQuery');


    function onClick(handler, el = document) {
        const handleClick = ((event) => {
            handler(event);
        }).bind(this);

        el.addEventListener('mouseup', handleClick);
        el.addEventListener('touchstart', handleClick);
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
        if (event.target.matches('button.navbar-toggler')) {
            event.preventDefault();
            const $target = $(event.target);
            const $navBar = $('.navbar-collapse.collapse');
            const isOpen = $navBar.hasClass('show');
            if (isOpen) {
                console.info(`${event.target} nav closed`);
                $siteNavigation.removeClass('toggled');
                $navBar.hide('slow', () => {
                    $navBar.removeClass('show');
                });
                $('body.home').removeClass('overflow-hidden');
                $target.attr('aria-expanded', 'false');
            } else {
                console.info(`${event.target} nav opened`);
                $siteNavigation.addClass('toggled');
                $navBar.show('fast', () => {
                    $navBar.addClass('show');
                });
                $('body.home').addClass('overflow-hidden');
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


})().catch((err) => console.warn(`Error loading navigation.js: ${err}`));
