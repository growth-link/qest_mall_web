//ページを開いたとき
$(function(){
    holdChecked("category");
    // すべてのカテゴリにチェックがある場合
    if($('#checkbox_all').prop("checked")){
        reflectAllCategory();
    }
    holdChecked("life_scene");
    holdChecked("tag");
});

// モーダルを開く
function showModal() {
    $('.modal').modal({
        centered: false
    }).modal('show');
}

// アコーディオンを開く
$('.nav-switch').click(function(){
    $(this).closest('.nav-open').toggleClass('active');
    $(this).closest('.nav-open').next('nav').slideToggle();
});

// 「すべてのカテゴリ」押下時
$(document).on('click', '.chg-grand-parent', function(){
    reflectAllCategory();
})

// メジャーカテゴリ押下時
$(document).on('click', '.chg-parent', function(){
    // 同階層のカテゴリを全て確認し、親カテゴリのチェック状態を判定する
    const t = $(this).closest('.major-category-box').find('input');
    const flag = $(this).prop('checked');
    for(let i = 0; i < t.length; i++) {
        t[i].checked = flag;
    }
    checkAllCategory();
})

// ミドルカテゴリ押下時
$(document).on('click', '.chg-child', function(){
    // 同階層のカテゴリを全て確認し、親カテゴリのチェック状態を判定する
    const middleCategoryBox = $(this).closest('.middle-category-box');
    const t = middleCategoryBox.find('.chg-grand-child');
    const flag = $(this).prop('checked');
    for(let i = 0; i < t.length; i++) {
        t[i].checked = flag;
    }
    checkMajorCategory($(this).closest('.major-category-box'));
    checkAllCategory();
})

// マイナーカテゴリ押下時
$(document).on('click', '.chg-grand-child', function(){
    // 同階層のカテゴリを全て確認し、親カテゴリのチェック状態を判定する
    const middleCategoryBox = $(this).closest('.middle-category-box');
    const t = middleCategoryBox.find('.chg-grand-child');
    let all_flag = true;
    for(let i = 0; i < t.length; i++) {
        if(t[i].checked == false){
            all_flag = false;
            break;
        }
    }
    middleCategoryBox.find('.chg-child').prop('checked', all_flag);
    checkMajorCategory($(this).closest('.major-category-box'));
    checkAllCategory();
})

// クリアボタン
$(document).on('click', '.clear-button', function(e){
    $('.filter').each(function(index, element) {
        $(element).val('');
    });
    // スイッチクリア
    $('.switch_button').each(function(index, element) {
        $(element).prop("checked", false);
    });
    // カテゴリクリア
    $('input[name="ostensible_category_ids[]"]:checked').each(function(index, element) {
        $(element).prop("checked", false);
    });
    // LIFE SCENEクリア
    $('input[name="ostensible_life_scene_ids[]"]:checked').each(function(index, element) {
        $(element).prop("checked", false);
    });
    // タグクリア
    $('input[name="ostensible_tag_ids[]"]:checked').each(function(index, element) {
        $(element).prop("checked", false);
    });
})

// チェック状態を保持する
function holdChecked(input_name){
    const checked_ids = $('input[name="' + input_name + '_ids"]').val().split(',');
    {
        //すべてのカテゴリにチェックがあるとき
        $('input[name="ostensible_' + input_name + '_ids[]"]').each(function(index, element) {
            if($.inArray($(element).val(), checked_ids) >= 0){
                $(element).prop("checked", true);
            }else{
                $(element).prop("checked", false);
            }
        });
    }
}

// 「すべてのカテゴリ」のチェック状態を全カテゴリに反映
function reflectAllCategory(){
    const t = $('.category-section').find('input');
    const flag = $('#checkbox_all').prop("checked");
    for(let i = 0; i < t.length; i++) {
        t[i].checked = flag;
    }
}

//メジャーカテゴリがすべてチェックだったら「すべてのカテゴリ」もチェック
function checkAllCategory(){
    const t = $('.chg-parent');
    let all_flag = true;
    for(let i = 0; i < t.length; i++) {
        if(t[i].checked == false){
            all_flag = false;
            break;
        }
    }
    $("#checkbox_all").prop('checked', all_flag);
}

//ミドルカテゴリがすべてチェックだったらメジャーカテゴリもチェック
function checkMajorCategory(majorCategory){
    const t = majorCategory.find('.chg-child');
    let all_flag = true;
    for(let i = 0; i < t.length; i++) {
        if(t[i].checked == false){
            all_flag = false;
            break;
        }
    }
    majorCategory.find('.chg-parent').prop('checked', all_flag);
}

// submit時にモーダル内のinputデータをhiddenに格納
$('.filter-bar').submit(function(){
    // カテゴリのidを配列で取得
    const category_ids = $('input[name="ostensible_category_ids[]"]:checked').map(function() {
        return $(this).val();
    }).get();
    $('input[name="category_ids"]').val(category_ids);

    // チェックされているライフシーンのidを配列で取得
    const life_scene_ids = $('input[name="ostensible_life_scene_ids[]"]:checked').map(function() {
        return $(this).val();
    }).get();
    $('input[name="life_scene_ids"]').val(life_scene_ids);

    // チェックされているタグのidを配列で取得
    const tag_ids = $('input[name="ostensible_tag_ids[]"]:checked').map(function() {
        return $(this).val();
    }).get();
    $('input[name="tag_ids"]').val(tag_ids);

    $('input[name="start_price"]').val($('input[name="ostensible_start_price"]').val()); // 価格帯（最小値）
    $('input[name="end_price"]').val($('input[name="ostensible_end_price"]').val()); // 価格帯（最大値）
    $('input[name="is_postage_free"]').val($('input[name="ostensible_is_postage_free"]:checked').val()); // 送料無料
    $('input[name="is_coupon"]').val($('input[name="ostensible_is_coupon"]:checked').val()); // クーポン対象
    $('input[name="including_out_of_stock"]').val($('input[name="ostensible_including_out_of_stock"]:checked').val()); // 在庫なしを含む
    $('input[name="exclude_keyword"]').val($('input[name="ostensible_exclude_keyword"]').val()); // 除外キーワード
});
