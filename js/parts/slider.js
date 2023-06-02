import $  from 'jquery';
import 'slick-carousel';

function basicSliders(){
    $('.slider').each(function(){
        let block = $(this);
        let slider = $(this).find('.slider--single');

        slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            // infinite: true,
            speed: 500,
            cssEase: 'linear',
            adaptiveHeight: false,
            variableWidth: true,
            prevArrow: block.find('.slider__arrow-rs--prev'),
            nextArrow: block.find('.slider__arrow-rs--next')
        });
        
        slider.on('init', function(){
            $(window).trigger('heightChanges');
        });
    });
}

export { basicSliders };
