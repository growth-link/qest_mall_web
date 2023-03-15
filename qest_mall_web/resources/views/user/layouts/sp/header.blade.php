<style>
    header {
        background-color: #ffffff;
    }

    header .top-container,
    header .user-container,
    header .point-container,
    header .search-container {
        margin: 15px 0;
        padding: 0 15px;
        display: flex;
    }

    header nav {
        margin-left: auto;
    }

    header .user-container p,
    header .point-container p {
        margin: 0;
        color: #6C6C6C;
        font-size: 9px;
        text-align: center;
        white-space: nowrap;
    }

    header .user-container .user_name {
        font-size: 11px;
        font-weight: bold;
        line-height: 40px;
    }

    header .user-container .honorific {
        line-height: 9px;
        margin-left: 10px;
    }

    header .user-container nav {
        width: 180px;
    }

    header .menu-box {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        white-space: nowrap;
    }

    header .menu-box p{
        color: #000000;
        font-size: 8px;
    }

    header .user-container .menu-box img {
        width: 18px;
        height: 18px;
        object-fit: contain;
    }
    header .point-container {
        margin-bottom: 0;
    }

    header .point {
        font-size: 11px;
        font-weight: bold;
        line-height: 40px;
        margin-left: 20px;
        margin-right: 10px;
    }

    header .search-container {
        padding: 15px;
        text-align: center;
    }

    header .search-container .search-box {
        font-size: 11px;
        margin: 0;
        width: 100%;
    }
</style>
<header>
    <div class="top-container">
        <a href="{{ route('sp.top') }}">
            <img src="/images/qest_mall_gray.png" style="height:24px;">
        </a>
        <nav>
            <div class="menu-box" onclick="location.href='#'">
                <img src="/images/user/icon_nobody.png">
                <p>
                    @if (session('user_id_token'))
                        マイメニュー
                    @else
                        ログイン
                    @endif
                </p>
            </div>
        </nav>
    </div>

    <div class="user-container">
        <p>
            @if (session('user_id_token'))
                <span class="user_name">田中　太郎</span>
                <span class="honorific">さま</span>
            @else
                <span class="user_name">ようこそクエストモールへ</span>
            @endif
        </p>
        <nav>
            <div class="menu-box" onclick="location.href='#'">
                <img src="/images/user/icon_point_detail.png">
                <p>ポイント詳細</p>
            </div>
            <div class="menu-box" onclick="location.href='#'">
                <img src="/images/user/icon_coupon.png">
                <p>獲得クーポン</p>
            </div>
            <div class="menu-box" onclick="location.href='#'">
                <img src="/images/user/icon_notice_sp.png">
                <p>お知らせ</p>
            </div>
        </nav>
    </div>

    @if (session('user_id_token'))
        <div class="point-container">
            <p>
                保有WAON POINT<span class="point">{{ number_format(2450) }}</span>pt
            </p>
        </div>
    @endif

    <div class="search-container">
        <div class="search-box">
            <form action={{ route('sp.item_keyword') }}  method="get">
                {{-- <input type="text" style="width:100%;" name="keyword" placeholder="キーワード検索" @if (isset($keyword)) value="{{ $keyword }}" @endif> --}}
                <input type="text" style="width:100%;" name="keyword" placeholder="キーワード検索">
            </form>
        </div>
    </div>


</header>
