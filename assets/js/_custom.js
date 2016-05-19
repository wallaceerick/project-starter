/*!
 * Title: Custom JS
 * Author: Wallace Erick
 * Author URI: http://wallaceerick.com.br/
 * Version: 1.0
 */

$(document).ready(function(){

    // Cached selectors to improve performance
    var loader            = $('.js-loader'),
        carousel       	  = $('.js-carousel');

    // Loader
    if (loader[0]){
        loader.jpreLoader({
            showPercentage: true,
            autoClose: true,
            splashFunction: function() {
                //console.log('Loading...');
            } 
        }, function() {
            //console.log('Loaded!');
        });
    }

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




