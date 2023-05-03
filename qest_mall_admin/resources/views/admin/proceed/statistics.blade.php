<!-- 管理画面ログイン -->
@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@component('admin.layouts.mall_global_menu')
@endcomponent
@section('content')
<style>
    .login-form-input {
        width: 400px;
        height: 60px;
        border: 1px solid lightgray;
        border-radius: 4px;
        padding: 10px;
        font-size: 18px;
        color: #333333;
    }

    .login-btn {
        width: 300px;
        border: 0px;
        border-radius: 30px;
        margin-top: 70px;
        padding: 13px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #333333;
        background-color: #FBDB5B;
    }
</style>
<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>売上・会計管理</a></li>
            <li><a href="{{ route('statistics'); }}" class="selected">統計情報</a></li>
            <li><a href="{{ route('histories'); }}">会計履歴</a></li>
            <li><a href="{{ route('monthly'); }}">月別精算明細</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<form action="" method="GET">
    <div style="width:80%;float:left;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:10px;"></span>

        <!-- 検索フィールド -->
        {{-- <div style="width:96%;height:30px;">
            <form action="" method="GET">
                <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="ショップ名/ショップID" value="{{$search ?? ""}}">
                <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;">検索</button>
            </form>

            <div style="width:80px;padding:3px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#aaaaaa;float:right;font-weight:bold;">並び替え</div>
        </div>
        <div style="background: #F7F7F7; width: 900px; height: 58px; display: flex; border-radius: 24px / 29px;  font-size: 18px; font-weight: bold;">
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">商品登録数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 132px; text-align: right;">1,235</p>
            <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">在庫切れ商品数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 124px; text-align: right;">300</p>
            <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">非表示商品数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 141px; text-align: right;">32</p>
        </div> --}}
    </div>
</form>

