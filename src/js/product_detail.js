import $ from 'jquery';
import 'slick-carousel';

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
    }); 

    // slide 
    $('#product_slide').slick({
        arrows: false,
        dots: true,
        customPaging: function(slider, i) {
            var thumbSrc = $(slider.$slides[i]).find('img').attr('src');
            return '<img src="' + thumbSrc + '">';
        }
    });

})();