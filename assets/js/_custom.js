/*!
 * Title: Custom JS
 * Author: Wallace Erick
 * Author URI: http://wallaceerick.com.br/
 * Version: 1.0
 */

$(document).ready(function(){

    // Cached selectors to improve performance
    var faturedSlider       	  = $('.js-featured-slider');

    // Featured Slider
    if (faturedSlider[0]){
        faturedSlider.owlCarousel({
            slideSpeed:         2000,
            pagination:         false,
            navigation:         true,
            items:       	    1
        });
    }

});




