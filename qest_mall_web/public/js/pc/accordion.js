// アコーディオンを開く（絞り込みモーダル）
$('.nav-switch-checkbox').click(function(){
    $(this).closest('.nav-open-checkbox').toggleClass('active');
    $(this).closest('.nav-open-checkbox').next('nav').slideToggle();
});

// アコーディオンを開く（FAQ）
$('.nav-open').click(function(){
    $(this).toggleClass('active');
    $(this).next('nav').slideToggle();
});
