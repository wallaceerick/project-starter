// |------------------------------------------------------
// |------------------------------------------------------
// | Mega Menu v1.0.0
// | https://github.com/marioloncarek/megamenu-js
// | Copyright (c) 2016 Mario Loncarek
// |------------------------------------------------------
// |------------------------------------------------------

$(document).ready(function(){
    'use strict';

    // Cached selectos
    var menu = $('.js-menu');

    // Checks if li has sub (ul) and adds class for toggle icon - just an UI
    menu.find('> ul > li:has( > ul)').addClass('menu-dropdown-icon');
    
    // Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)
    menu.find('> ul > li > ul:not(:has(ul))').addClass('normal-sub');
   
    // Adds menu-mobile class (for mobile toggle menu) before the normal menu
    // Mobile menu is hidden if width is more then 959px, but normal menu is displayed
    // Normal menu is hidden if width is below 959px, and jquery adds mobile menu
    // Done this way so it can be used with wordpress without any trouble
    menu.find('> ul').before("<a href=\"#\" class=\"menu-mobile\">Menu</a>");

    // If width is more than 943px dropdowns are displayed on hover
    menu.find('> ul > li').hover(function (e) {
        if ($(window).width() > 943) {
            $(this).children('ul').stop(true, false).fadeToggle(150);
            e.preventDefault();
        }
    });

    // If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)
    menu.find('> ul > li').click(function () {
        if ($(window).width() <= 943) {
            $(this).children("ul").fadeToggle(150);
        }
    });

    // When clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)
    $('.menu-mobile').click(function (e) {
        menu.find('> ul').toggleClass('show-on-mobile');
        e.preventDefault();
    });

});