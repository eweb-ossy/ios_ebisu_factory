import $ from 'jquery';
import 'slick-carousel';
import 'rellax';
import Rellax from 'rellax';

(function() {

    // nav button 
    $('#nav_btn').on('click', function() {
        $(this).toggleClass('active');
        $('#nav_menu').slideToggle();
    });

    // slider 
    $('.slider-up').slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        cssEase: "linear",
        swipe: false,
        arrows: false,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        pauseOnFocus: false,
        pauseOnHover: false,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    $('.slider-down').slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        cssEase: "linear",
        swipe: false,
        arrows: false,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        pauseOnFocus: false,
        pauseOnHover: false,
        centerMode: true,
        rtl: true,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
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

    $(window).on('resize', function() {
        windowWidth = getWindowWidth();
        parallax();
    });
    

    // parallax 
    function parallax() {
        let rellax = new Rellax('.parallax', {
            speed: 1
        });
        if (windowWidth < 1440) {
            rellax.refresh();
            rellax.destroy();
        }
    }
    parallax();

})();