$(document).ready(() => {
    $(".main-carousel-slick").slick({
        infinite: true, // ループの有効化
        touchMove: true,
        slidesToScroll: 1,
        autoplay: true,
        speed: 1000,
        arrows: false,
    });
    $(".three-slick").slick({
        infinite: true,
        slidesToShow: 2, //3つ目はcssで見切れて表示させている
        touchMove: true,
        arrows: false,
    });
    $(".coupon-slick").slick({
        infinite: true,
        slidesToShow: 2,
        touchMove: true,
        arrows: false,
    });
});
