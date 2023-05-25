@extends("layout_sp")
@section('content')
@component('user.my_menu.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/my_menu.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    {{-- Main Carousel --}}
    <h2 class="page-title">基本情報</h2>

    <div class="item-content">
        <div>
            <h3 class="item-title">ユーザーID</h3>
            <p>123456789</p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">ニックネーム</h3>
            <p>未設定</p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">メールアドレス</h3>
            <p>test@qestmall.jp</p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">パスワード</h3>
            <p>⚫︎⚫︎⚫︎⚫︎⚫︎⚫︎</p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">氏名</h3>
            <p>田中 太郎</p>
        </div>
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">フリガナ</h3>
            <p>タナカ タロウ</p>
        </div>
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">電話番号</h3>
            <p>080-1234-5678（携帯）</p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">性別</h3>
            <p>男性</p>
        </div>
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">生年月日</h3>
            <p>2021年3月1日</p>
        </div>
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">ご請求先住所</h3>
            <p>
                〒140-0001<br>
                東京都中央区銀座１−１−１<br>
                クエスト花子&emsp;&emsp;090-0000-0000(携帯)
            </p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">お届け先住所１</h3>
            <p>
                〒140-0001<br>
                東京都中央区銀座１−１−１<br>
                クエスト花子&emsp;&emsp;090-0000-0000(携帯)
            </p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    <div class="flex-box">
        <button class="secondary_btn_radius add-addressee">
            <img class="icon_plus" src="/images/user/icon_plus.png">
            お届け先を追加する
        </button>
    </div>

    <div class="item-content">
        <div>
            <h3 class="item-title">2段階認証</h3>
            <p>******@qestmall.jp</p>
        </div>
        <img src="/images/user/icon_pen.png">
    </div>

    @component('user.layouts.sp.footer')
    @endcomponent
    {{-- @include('user.layouts.sp.menu') --}}
</div>
@endsection
@section("script")
@endsection
