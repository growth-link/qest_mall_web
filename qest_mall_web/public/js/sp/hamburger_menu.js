'use strict';

{
    // もっとみるを開く
    $(document).on('click', '.open-see-more', function(e){
        removeOverLay();
        $('.search-actions').removeClass('show');
        $('.life-scene-actions').removeClass('show');
        $('.tag-actions').removeClass('show');
        $('#overlay_see_more').addClass('show');
        $('#main_container').addClass('fixed');
    })

    // 絞り込みを開く
    $(document).on('click', '.open-filter', function(e){
        removeOverLay();
        $('.search-actions').addClass('show');
        $('#overlay_filter').addClass('show');
        $('#main_container').addClass('fixed');
    })

    // カテゴリから探すを開く
    $(document).on('click', '.open-major-category', function(e){
        removeOverLay();
        $('.search-actions').removeClass('show');
        $('#overlay_major_category').addClass('show');
        $('#main_container').addClass('fixed');
    })

    // 中カテゴリを開く
    $(document).on('click', '.open-middle-category', function(e){
        removeOverLay();
        $('#overlay_middle_category' + $(this).data('category-id')).addClass('show');
        $('#main_container').addClass('fixed');
    })

    // 小カテゴリを開く
    $(document).on('click', '.open-minor-category', function(e){
        removeOverLay();
        // 「戻る」に親カテゴリ名を設定
        $('#overlay_minor_category' + $(this).data('category-id'))
            .find('.parent-category-name').html($(this).data('category-name'));

        $('#overlay_minor_category' + $(this).data('category-id')).addClass('show');
        $('#main_container').addClass('fixed');
    })

    // 細カテゴリを開く
    $(document).on('click', '.open-quaternary-category', function(e){
        removeOverLay();
        // 「戻る」に親カテゴリ名を設定
        $('#overlay_quaternary_category' + $(this).data('category-id'))
            .find('.parent-category-name').html($(this).data('category-name'));

        $('#overlay_quaternary_category' + $(this).data('category-id')).addClass('show');
        $('#main_container').addClass('fixed');
    })

    // カテゴリ選択
    $(document).on('click', '.add-category', function(e){
        // 絞り込みモーダルの選択済み項目を書き換え
        $('input[name="category_id"]').val($(this).data('category-id'));
        $('.seleted-category').html($(this).data('category-name'));
        if($(this).data('category-id') == ''){
            $('.seleted-category').removeClass('selected');
        }else{
            $('.seleted-category').addClass('selected');
        }

        removeOverLay();
        $('.search-actions').addClass('show');
        $('#overlay_filter').addClass('show');
        $('#main_container').addClass('fixed');
    })

    // LIFE SCENEから探すを開く
    $(document).on('click', '.open-life-scene', function(e){
        removeOverLay();
        $('.search-actions').removeClass('show');
        $('.life-scene-actions').addClass('show');
        $('#overlay_life_scene').addClass('show');
        $('#main_container').addClass('fixed');
    })

    // LIFE SCENE追加
    $(document).on('click', '.add-life-scene', function(e){
        // チェックされているタグのidとnameを配列で取得
        const life_scene_ids = $('input[name="sub_categories[]"]:checked').map(function() {
            return $(this).val();
        }).get();

        const life_scene_names_str = $('input[name="sub_categories[]"]:checked').map(function() {
            return $(this).data('life-scene-name');
        }).get().join(',');
        // 絞り込みモーダルの選択済み項目を書き換え
        $('input[name="life_scene_id"]').val(life_scene_ids);
        $('.seleted-life-scene').html(life_scene_names_str);
        if(life_scene_ids.length = 0){
            $('.seleted-life-scene').removeClass('selected');
        }else{
            $('.seleted-life-scene').addClass('selected');
        }

        removeOverLay();
        $('.life-scene-actions').removeClass('show');
        $('.search-actions').addClass('show');
        $('#overlay_filter').addClass('show');
        $('#main_container').addClass('fixed');
    })

    // タグから探すを開く
    $(document).on('click', '.open-tag', function(e){
        removeOverLay();

        $('.search-actions').removeClass('show');
        $('.tag-actions').addClass('show');
        $('#overlay_tag').addClass('show');
        $('#main_container').addClass('fixed');
    })

    // すべてのタグ押下時
    $(document).on('click', '.all-tag', function(e){
        reflectAllTag();
    })

    // 各タグ押下時
    $(document).on('click', '.child-tag', function(e){
        const t = $('#overlay_tag').find('input');
        // 全タグを確認した結果で「すべてのタグ」を切り替え
        let all_flag = true;
        for(let i = 1; i < t.length; i++) {
            if(t[i].checked == false){
                all_flag = false;
                break;
            }
        }
        t[0].checked = all_flag;
    })

    // タグ追加
    $(document).on('click', '.add-tag', function(e){
        // チェックされているタグのidとnameを配列で取得
        let tag_ids = $('input[name="tags[]"]:checked').map(function() {
            return $(this).val();
        }).get();
        let tag_names = $('input[name="tags[]"]:checked').map(function() {
            return $(this).data('tag-name');
        }).get();

        let tag_names_str = tag_names.join(',');

        if(tag_names.length == 0 || $.inArray('', tag_ids) >= 0){
            // クリア状態でタグ追加した場合または「すべてのタグ」が含まれている場合
            tag_ids = [''];
            tag_names_str = 'すべてのタグ';
            $('.seleted-tag').removeClass('selected');
        }else{
            // 一つでも選択されたタグ（「すべてのタグ」以外）があり、タグ追加した場合
            $('.seleted-tag').addClass('selected');
        }
        // 絞り込みモーダルの選択済み項目を書き換え
        $('input[name="tag_id"]').val(tag_ids);
        $('.seleted-tag').html(tag_names_str);

        removeOverLay();
        $('.tag-actions').removeClass('show');
        $('.search-actions').addClass('show');
        $('#overlay_filter').addClass('show');
        $('#main_container').addClass('fixed');

        // クリア状態でタグ追加した場合またはすべてのタグが含まれている場合（必ずモーダル切り替え後に設定する）
        if($.inArray('', tag_ids) >= 0){
            // 全タグをcheckedにする
            $('.all-tag').prop("checked", true);
            reflectAllTag();
        }
    })

    // モーダルを閉じる
    $(document).on('click', '.close', function(e){
        removeOverLay();
        $('.search-actions').removeClass('show');
        $('.life-scene-actions').removeClass('show');
        $('.tag-actions').removeClass('show');
        $('#main_container').removeClass('fixed');
    })

    // ページを戻る
    $(document).on('click', '.prev-page', function(e){
        removeOverLay();
        const overlay_id = $(this).parent().attr('id');
        if(overlay_id.match(/overlay_major_category/)){
            $('.search-actions').addClass('show');
            $('#overlay_filter').addClass('show');
        }
        if(overlay_id.match(/overlay_middle_category/)){
            $('#overlay_major_category').addClass('show');
        }
        if(overlay_id.match(/overlay_minor_category/)){
            $('#overlay_middle_category' + $(this).data('parent-id')).addClass('show');
        }
        if(overlay_id.match(/overlay_quaternary_category/)){
            $('#overlay_minor_category' + $(this).data('parent-id')).addClass('show');
        }
        if(overlay_id.match(/overlay_life_scene/)){
            // チェック状態を保持する
            const checked_ids = $('input[name="life_scene_id"]').val().split(',');
            $('input[name="sub_categories[]"]').each(function(index, element) {
                if($.inArray($(element).val(), checked_ids) >= 0){
                    $(element).prop("checked", true);
                }else{
                    $(element).prop("checked", false);
                }
            });
            $('.life-scene-actions').removeClass('show');
            $('.search-actions').addClass('show');
            $('#overlay_filter').addClass('show');
        }
        if(overlay_id.match(/overlay_tag/)){
            // チェック状態を保持する
            const checked_ids = $('input[name="tag_id"]').val().split(',');

            if($.inArray('', checked_ids) >= 0){
                // 「すべてのタグ」にチェックがある場合
                $('input[name="tags[]"]').each(function(index, element) {
                    $(element).prop("checked", true);
                });
            }else{
                // 「すべてのタグ」にチェックがない場合
                $('input[name="tags[]"]').each(function(index, element) {
                    if($.inArray($(element).val(), checked_ids) >= 0){
                        $(element).prop("checked", true);
                    }else{
                        $(element).prop("checked", false);
                    }
                });
            }

            $('.tag-actions').removeClass('show');
            $('.search-actions').addClass('show');
            $('#overlay_filter').addClass('show');
        }
        $('#main_container').addClass('fixed');
    })

    // クリアボタン
    $(document).on('click', '.clear-button', function(e){
        const button_id = $(this).attr('id');
        if(button_id.match(/all-clear/)){
            $('.filter').each(function(index, element) {
                $(element).val('');
            });
            $('.seleted-category').html('すべてのカテゴリ');
            $('.seleted-category').removeClass('selected');
            $('.switch_button').each(function(index, element) {
                $(element).prop("checked", false);
            });
        }
        if(button_id.match(/all-clear/) || button_id.match(/life-scene-clear/)){
            // LIFE SCENEクリア
            $('input[name="sub_categories[]"]:checked').each(function(index, element) {
                $(element).prop("checked", false);
            });
            $('input[name="life_scene_id"]').val('');
            $('.seleted-life-scene').html('');
            $('.seleted-life-scene').removeClass('selected');

            // 絞り込みモーダルに戻る
            removeOverLay();
            $('.life-scene-actions').removeClass('show');
            $('.search-actions').addClass('show');
            $('#overlay_filter').addClass('show');
            $('#main_container').addClass('fixed');
        }
        if(button_id.match(/all-clear/) || button_id.match(/tag-clear/)){
            // タグクリア
            $('input[name="tags[]"]:checked').each(function(index, element) {
                $(element).prop("checked", false);
            });
            $('input[name="tag_id"]').val('');
            $('.seleted-tag').html('すべてのタグ');
            $('.seleted-tag').removeClass('selected');

            // 絞り込みモーダルに戻る
            removeOverLay();
            $('.tag-actions').removeClass('show');
            $('.search-actions').addClass('show');
            $('#overlay_filter').addClass('show');
            $('#main_container').addClass('fixed');

            // 全タグをcheckedにする（必ずモーダル切り替え後に設定する）
            $('.all-tag').prop("checked", true);
            reflectAllTag();
        }
    })

    // モーダル非表示処理
    function removeOverLay(){
        $('.overlay').each(function(){
            $(this).removeClass('show');
        });
    }

    // 「すべてのタグ」のチェック状態を全タグに反映
    function reflectAllTag(){
        const t = $('#overlay_tag').find('input');
        const flag = $('.all-tag').prop("checked");
        for(let i = 0; i < t.length; i++) {
            t[i].checked = flag;
        }
    }

}
