import $ from 'jquery';
import 'slick-carousel';

(function() {

    // nav button 
    $('#nav_btn').on('click', function() {
        $(this).toggleClass('active');
        $('#nav_menu').slideToggle();
    });

    // slider 
    $('.slide-main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.mv-slide-thumbnail',
        autoplay: true,
        autoplaySpeed: 5000,
    });
    
    $('.mv-slide-thumbnail').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.slide-main',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    $('.slide-main').on('afterChange', function(event, slick, index) {
        let caption = $($('.slide-main').eq(0).find('img')[index]).data('caption');
        $('#mv_caption').html(caption);
        $('#mv_caption p').hide().fadeIn(1500);
    });

    $('.slide-voice').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    function getWindowWidth() {
        return $(window).width();
    }
    let windowWidth = getWindowWidth();

    $(window).on('scroll', function() {
        let scroll = $(this).scrollTop();

        if (windowWidth > 1000 && scroll > 100) {
            $('.mv').css('margin-top', '100px');
            $('.header').addClass('fixed slide-down');
        } else if (windowWidth < 1000 && scroll > 56) {
            $('.mv').css('margin-top', '56px');
            $('.header').addClass('fixed slide-down');
        } else {
            $('.mv').css('margin-top', 0);
            $('.header').removeClass('fixed slide-down');
        }
        
    });

})();