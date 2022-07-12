import $ from 'jquery';
import 'rellax';
import Rellax from 'rellax';

(function() {

    // nav button 
    $('#nav_btn').on('click', function() {
        $(this).toggleClass('active');
        $('#nav_menu').slideToggle();
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