import $ from 'jquery';
import 'slick-carousel';

(function() {

    if (typeof EventTarget !== 'undefined') {
        let supportsPassive = false;
        try {
          // Test via a getter in the options object to see if the passive property is accessed
          const opts = Object.defineProperty({}, 'passive', {
            get: () => {
              supportsPassive = true;
            },
          });
          window.addEventListener('testPassive', null, opts);
          window.removeEventListener('testPassive', null, opts);
        } catch (e) {}
        const func = EventTarget.prototype.addEventListener;
        EventTarget.prototype.addEventListener = function (type, fn) {
          this.func = func;
          this.func(type, fn, supportsPassive ? { passive: false } : false);
        };
    }

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

    // レシピ詳細 view 
    const block_num = document.getElementsByClassName('recipe-block').length;
    const block_col = windowWidth > 1440 ? Math.trunc(block_num / 3) : Math.trunc(block_num / 2);
    // const block_heght = $('.recipe-block').outerHeight(true);
    $('.recipe-block').on('click', function() {
        $('.recipe-block').removeClass('active');
        $(this).addClass('active');
        $('.blank').remove(); // 空白クリア
        let index = $('.recipe-block').index(this); // recipe block 何番目
        let col = windowWidth > 1440 ? Math.trunc(index / 3) : Math.trunc(index / 2); // 列 0 - 
        let row = windowWidth > 1440 ? index % 3 : index % 2; // 行　 0 - 3
        let body = $(this).clone().removeClass('recipe-block').addClass('detail-block').addClass('row-'+row);
        if (col >= block_col) {
            $('.recipe').children('.inner').append('<div class="blank"></div>');
        } else {
            if (windowWidth > 1440) {
                $('.recipe-block').eq(col * 3 + 2).after('<div class="blank"></div>');
            } else {
                $('.recipe-block').eq(col * 2 + 1).after('<div class="blank"></div>');
            }
        }
        // $('.blank').height(block_heght);
        $('.blank').append(body);
        $('.detail-block .warp .image').slick({
            arrows: false,
            dots: true,
            customPaging: function(slider, i) {
                var thumbSrc = $(slider.$slides[i]).find('img').attr('src');
                return '<img src="' + thumbSrc + '">';
            }
        });
    });
    $(document).on('click', '.close-btn', function() {
        $('.blank').slideUp().remove(); // 空白クリア
        $('.detail-block').slideUp().remove();
    });

})();