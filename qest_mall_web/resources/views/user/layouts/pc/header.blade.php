<div style="width:100%;height:60px;padding:10px 1%;border-bottom:1px solid #cccccc;">
    <a href="{{ route('top') }}">
        <img src="/images/qest_mall_gray.png" style="height:35px;">
    </a>

    <div style="float:right;">
        <div class="search-box" style="float:left;">
            <form action={{ route('item_keyword') }}  method="get">
                {{-- <input type="text" style="width:300px;" name="keyword" placeholder="キーワード検索" @if (isset($keyword)) value="{{ $keyword }}" @endif> --}}
                <input type="text" style="width:300px;" name="keyword" placeholder="キーワード検索">
            </form>
        </div>
        <div style="float:left;text-align:center;width:70px;" onclick="location.href='{{route('cart')}}'">
            <img src="/images/user/icon_cart.png">
            <p style="font-size:10px;">カート</p>
        </div>
        <div style="float:left;text-align:center;width:70px;" onclick="location.href='#'">
            <img src="/images/user/icon_notice.png">
            <p style="font-size:10px;">お知らせ</p>
        </div>
        <div style="float:left;text-align:center;width:70px;" onclick="location.href='#'">
            <img src="/images/user/icon_favorite.png">
            <p style="font-size:10px;">お気に入り</p>
        </div>
        <div style="float:left;text-align:center;width:70px;" onclick="location.href='{{route('purchase_histories');}}'">
            <img src="/images/user/icon_history.png">
            <p style="font-size:10px;">購入履歴</p>
        </div>
        {{-- @if($is_login)
        <button class="primary_btn" style="float:left;" onclick="location.href='{{ route('user_info') }}'">
            マイメニュー
        </button>
        @else --}}
        <button class="primary_btn" style="float:left;" onclick="location.href='#'">
            ログイン
        </button>
        {{-- @endif --}}
    </div>
</div>
