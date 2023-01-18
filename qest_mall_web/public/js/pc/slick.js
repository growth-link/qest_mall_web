$(document).ready(() => {
    $(".slick").slick({
        infinite: true, // ループの有効化
        slidesToShow: 5,
        slidesToScroll: 1
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
