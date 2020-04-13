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

});