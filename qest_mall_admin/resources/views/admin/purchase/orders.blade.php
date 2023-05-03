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

<li><a href="{{ route('orders'); }}">受注履歴一覧</a></li>
                <li><a href="{{ route('new-orders'); }}">新規注文一覧</a></li>
                <li><a href="{{ route('before-sends'); }}">発送準備一覧</a></li>
                <li><a href="{{ route('cancel-requests'); }}">キャンセル依頼一覧</a></li>
                <li><a href="{{ route('return-requests'); }}">返品処理依頼一覧</a></li>

<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>売上・会計管理</a></li>
            <li><a href="{{ route('statistics'); }}">統計情報</a></li>
            <li><a href="{{ route('histories'); }}" class="selected">会計履歴</a></li>
            <li><a href="{{ route('monthly'); }}">月別精算明細</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->


<form action="" method="GET">
    <div style="width:80%;float:left;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:30px;">会計履歴</span>

        <div style="margin-bottom:20px;">
            <!-- ラジオボタン + テキスト-->
            <input class="visually-hidden" type="radio" name="fruits" id="apple" checked/>
            <label class="radio-label" for="apple">全体</label>
            <input class="visually-hidden" type="radio" name="fruits" id="orange"/>
            <label class="radio-label" for="orange">ショップ別</label>
        </div>

        <!-- 検索フィールド -->
        
        <div style="width:96%;height:50px;">
            <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="ショップ名/ショップID" value="{{$search ?? ""}}">
            <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;margin-right:20px;">検索</button>
        
            <div style="float:left;">
                <span style="float:left;margin-right:10px;padding:5px;">期間選択</span>
                <input name="search" type="date" style="height:30px;width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="" value="{{$search ?? ""}}">
                <span style="float:left;margin-right:10px;padding:10px;">〜</span>
                <input name="search" type="date" style="height:30px;width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="" value="{{$search ?? ""}}">
            </div>
        </div>
        

        <!-- 2段目 -->
        <div style="width:96%;height:50px;">
            <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="注文番号" value="{{$search ?? ""}}">
            <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;margin-right:20px;">検索</button>
    
            <div style="float:left;">
                <div style="width:80px;float:left;padding:5px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#e2e2e2;font-weight:bold;">絞り込み</div>
                <select style="float:left;border:0px;border-radius:0px 5px 5px 0px;width:200px;padding:5px 10px;background-color:#eeeeee;color:#333333;font-weight:bold;" 
                    name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
                    <option value="shop_name">種別 / 売上</option>
                </select>
            </div>
        </div>

        <!-- 3段目 -->
        <div style="width:96%;height:50px;">
            <div style="width:400px;float:left;">
                <span style="float:left;margin-right:10px;padding:5px;">テストクエストモール店</span>
                <button class="primary_btn_radius_menu" style="float:left;">
                    手数料入力
                </button>
            </div>
            
            <div style="width:300px;float:right;height:30px;">
                <div class="wrap" style="font-size:20px;float:right;">
                    <ul>
                        <li class="cls1">＜</li>
                        <li class="cls1">1</li>
                        <li class="cls1">2</li>
                        <li class="cls1">3</li>
                        <li class="cls1">＞</li>
                    </ul>
                </div>
            </div>
        </div>


        
    </div>
</form>

