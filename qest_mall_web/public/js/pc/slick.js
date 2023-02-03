$(document).ready(() => {
    $(".main-carousel-slick").slick({
        infinite: true, // ループの有効化
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        speed: 1000
    });
    $(".five-slick").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1
    });
    $(".coupon-slick").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });
});
