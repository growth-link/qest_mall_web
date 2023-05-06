@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@component('admin.layouts.mall_global_menu')
@endcomponent
@section('content')

Route::get('/shop-mng/notice-send-lists', [NoticeController::class, 'noticeSendLists'])->name('notices.send_lists'); // ショップ管理 - お知らせ配信リスト
Route::get('/shop-mng/notice-send-lists/create', [NoticeController::class, 'noticeSendListsCreate'])->name('notices.send_lists.create'); // ショップ管理 - お知らせ配信リスト追加
Route::get('/shop-mng/notice-send-lists/edit', [NoticeController::class, 'noticeSendListsEdit'])->name('notices.send_lists.edit'); // ショップ管理 - お知らせ配信リスト編集
<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>ショップ管理</a></li>
            <li><a href="{{ route('admin.mall.shops'); }}">ショップ一覧・編集</a></li>
            <li><a href="{{ route('admin.mall.release_request'); }}">公開申請一覧</a></li>
            <li><a href="{{ route('admin.mall.change_request'); }}">変更申請一覧</a></li>
            <li><a href="{{ route('admin.shop.shops.create'); }}" class="selected">新規ショップ追加</a></li>
            <li><a href="{{ route('admin.notices.send_lists'); }}">お知らせ配信リスト</a></li>
            <li><a href="{{ route('admin.notices.send_lists.create'); }}">お知らせ作成・編集</a></li>
            <li><a href="{{ route('admin.notices.send_lists.edit'); }}">お知らせ配信履歴</a></li>
        </ul>
    </nav>
</div>

<style>
    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .box-left {
        width: 15%;
        margin: 10px;
        background-color: #ccc;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        padding: 5px;
    }

    .box-right {
        width: 80%;
        margin: 10px;
        background-color: #ccc;
        padding: 5px;
    }

    .required-badge {
        background-color: red;
        color: white;
        border-radius: 5px;
        padding: 5px;
    }
</style>

<form action="" method="POST">
<div style="width:80%;float:left;">
    <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;">登録法人情報編集</span>

    <div class="ui input">
        <input type="text" placeholder="Search...">
    </div>

    <div class="container">
        <div class="box-left">
            名前
            <div class="required-badge">必須</div>
        </div>
        <div class="ui input box-right">
            <input type="text" placeholder="Search...">
        </div>
    </div>

    <!-- チェックボックス + テキスト -->
    <label class="ECM_CheckboxInput">
        <input class="ECM_CheckboxInput-Input" type="checkbox">
        <span class="ECM_CheckboxInput-DummyInput"></span>
        <span class="ECM_CheckboxInput-LabelText">利用規約に同意する</span>
    </label>

    <!-- チェックボックスのみ -->
    <label class="ECM_CheckboxInput" style="width: 40px;">
        <input class="ECM_CheckboxInput-Input" type="checkbox">
        <span class="ECM_CheckboxInput-DummyInput"></span>
    </label>

    <!-- ラジオボタン + テキスト-->
    <input class="visually-hidden" type="radio" name="fruits" id="apple"/>
    <label class="radio-label" for="apple">法人</label>
    <input class="visually-hidden" type="radio" name="fruits" id="orange"/>
    <label class="radio-label" for="orange">個人事業主</label>

    <!-- ラジオボタンのみ -->
    <div>
        <input class="visually-hidden" type="radio" name="fruits" id="radio1"/>
        <label class="radio-label" for="radio1"></label>
        <input class="visually-hidden" type="radio" name="fruits" id="radio2"/>
        <label class="radio-label" for="radio2"></label>
        <input class="visually-hidden" type="radio" name="fruits" id="radio3"/>
        <label class="radio-label" for="radio3"></label>
    </div>

    <div>
        <input type="text" value="" placeholder="テキスト..." class="input-text">
    </div>

    <div class="password-container">
        <input type="password" value="" placeholder="パスワード..." class="input-password">
        <i class="eye icon"></i>
    </div>


    <button class="primary_btn_radius">
        下書き保存
    </button>

    <button class="primary_btn_radius">
        入力内容を確認
    </button>
</div>


@endsection