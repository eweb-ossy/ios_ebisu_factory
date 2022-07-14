import $ from 'jquery';

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

    $('#getAddress').on('click', function() {
        let zipcode1 = $('#zipcode1').val();
        let zipcode2 = $('#zipcode2').val();
        let zipcode = zipcode1 + zipcode2;
        if (zipcode.length === 7) {
            $.ajax({
                url: 'https://zipcloud.ibsnet.co.jp/api/search',
                data: {
                    zipcode: zipcode
                },
                dataType: "jsonp",
            })
            .done(function(data) {
                $('#pref_name').val(data.results[0].address1);
                $('#address').val(data.results[0].address2+data.results[0].address3);
            })
        }
    });

})();