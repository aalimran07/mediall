(function($) {
    'use strict';

    function custom_js() {
        var windowS = $(window),
            slider_item = $('.slider-item'),
            sliderHeight = slider_item.height(),
            slidercaption = $('.slider-captions'),
            slidercaptionH = slidercaption.height(),
            captionmiddle = (sliderHeight - slidercaptionH) / 2,
            container = $('.container'),
            containerOutWdith = container.outerWidth(true),
            containerwidth = container.outerWidth(),
            containerLeftM = (containerOutWdith - containerwidth) / 2;

        slidercaption.css({
            paddingTop: captionmiddle - 50,
            paddingBottom: captionmiddle
        });

        $('.owl-nav').css({
            'left': containerLeftM + 15,
            'bottom': captionmiddle - 50
        });
    }
    var sliderarea = $(".slider-area");

    sliderarea.owlCarousel({
        items: 1,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        nav: true,
        loop: true,
        autoplay: false,
        smartSpeed: 1000
    });
    sliderarea.on('translated.owl.carousel', function(event) {
        event.preventDefault();
        $('.slider-captions').removeClass('animated zoomOutLeft');
        $('.slider-captions').addClass('animated zoomInLeft');

    });
    sliderarea.on('changed.owl.carousel', function(event) {
        event.preventDefault();
        $('.slider-captions').removeClass('animated zoomInLeft');
        $('.slider-captions').addClass('animated zoomOutLeft');


    });

    if ($.fn.slick) {
         // client slider
        $('.detailst-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.details-nav',
        });
        $('.details-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.detailst-for',
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev clientprev fa fa-angle-left"></button>',
            nextArrow: '<button type="button" class="slick-next clientnext fa fa-angle-right"></button>',
            responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 780,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    }

    $(window).on('load', function() {
        custom_js();
    });
    $(window).on('resize', function() {
        custom_js();
    });
})(jQuery);