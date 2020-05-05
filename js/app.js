$(function() {
    // 波動ライブラリ
    let $hoge = $('.main-page');
    $hoge.ripples({
        resolution: 300,
        dropRadius: 25,
        perturbance: 0.05
    });
    // 波動ライブラリ終了

    $('.ham').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('.side-menu').removeClass('open');
            $('#index').removeClass('open');
            $('.overlay').removeClass('open');
        } else {
            $(this).addClass('active');
            $('.side-menu').addClass('open');
            $('#index').addClass('open');
            $('.overlay').addClass('open');
        }
    });
    $('.overlay').click(function() {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $('.ham').removeClass('active');
            $('.side-menu').removeClass('open');
            $('#index').removeClass('open');
        }
    });
    $(window).scroll(function() {
        let windowHeight = $(window).height();
        $('#text').each(function() {
            let scroll = $(window).scrollTop();
            let textTop = $(this).offset().top;
            // console.log(textTop);
            if (scroll > textTop - windowHeight / 2) {
                $('#text').css('opacity', '1');
                $('.left-box img').addClass('move');
            } else {
                $('#text').css('opacity', '0');
                $('.left-box img').removeClass('move');

            }
        });

        $('.catch-copy').each(function() {
            let scroll = $(window).scrollTop();
            let textTop = $(this).offset().top;
            // console.log(textTop);
            if (scroll > textTop - windowHeight / 1.5) {
                $('.catch-copy').css('opacity', '1');
                $('.right-box img').addClass('move');
                $('.catch-copy').addClass('move');
            } else {
                $('.catch-copy').css('opacity', '0');
                $('.right-box img').removeClass('move');
                $('.catch-copy').removeClass('move');


            }
        });
    });


});