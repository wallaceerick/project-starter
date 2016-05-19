/*!
 * Title: Custom JS
 * Author: Wallace Erick
 * Author URI: http://wallaceerick.com.br/
 * Version: 1.0
 */

$(document).ready(function(){

    // Cached selectors to improve performance
    var carousel       	  = $('.js-carousel');

    // Featured Slider
    if (carousel[0]){
        carousel.owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
       });
    }

});




