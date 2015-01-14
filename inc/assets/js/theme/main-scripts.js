(function($) {
  'use strict';

/**
 * Put your magic jQuery code here
 */
 $(function(){
    $('.menu-button').on('click', function() {
        $('.nav-menu').addClass('show-nav');
        $('.menu-mobile-header').addClass('show-menu-header');
    });
    $('.menu-mobile-header').on('click', function() {
        $('.nav-menu').removeClass('show-nav');
        $('.menu-mobile-header').removeClass('show-menu-header');
    });
    $('<div class="sub-menu-button dashicons dashicons-arrow-down-alt2"></div>').appendTo('.menu-item-has-children');
    $('#menu-item-311 a').on('click', function() {
        $(this).parent().toggleClass('show-sub-nav');
        $(this).parent().find('> .sub-menu-button').toggleClass('dashicons-arrow-down-alt2').toggleClass('dashicons-arrow-up-alt2');
    });

    $(document).on('click', '.sub-menu-button', function() {
        console.log('Clicky');
        $(this).toggleClass('dashicons-arrow-down-alt2').toggleClass('dashicons-arrow-up-alt2');
        $(this).parent().toggleClass('show-sub-nav');
    });
 });

})(jQuery);