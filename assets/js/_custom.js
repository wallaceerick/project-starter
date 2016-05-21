// |------------------------------------------------------
// |------------------------------------------------------
// | Custom JS
// | http://wallaceerick.com.br/
// | Copyright (c) 2016 Wallace Erick
// |------------------------------------------------------
// |------------------------------------------------------

$(document).ready(function(){

    // Cached selectors to improve performance.
    var loader            = $('.js-loader'),
        carouselDemo      = $('.js-carousel'),
        maskDemo          = $('.js-date'),
        modalDemo         = $('.js-modal'),
        validateDemo      = $('.js-validate-contact');

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

    // Carousel
    if (carouselDemo[0]){
        carouselDemo.owlCarousel({
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

    // Mask
    if (maskDemo[0]){
        maskDemo.mask('99/99/9999', {
            placeholder: ''
        });
    }

    // Modal
    if(modalDemo[0]){
        modalDemo.animatedModal({
            animatedIn:   'zoomIn',
            animatedOut:  'bounceOut',
            color:        '#39BEB9',
            beforeOpen: function() {
                //console.log('beforeOpen!');
            },
            afterClose: function() {
                //console.log('afterClose!');
            }
        });
    }

    // Validate
    if(validateDemo[0]){
        validateDemo.validate({
            rules: {
                name:     'required',
                email: {
                    required: true,
                    email: true
                },
                date:    'required',
                message: 'required'
            },
            messages: {
                name:    'Digite seu nome.',
                email:   'Digite um e-mail válido.',
                date:    'Digite uma data válido.',
                message: 'Digite sua mensagem.'
            }
        });
    }

});