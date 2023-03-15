<style>
    .menu {
        position: sticky;
        top: auto;
        bottom: 0;
        left: 0;
        right: 0;
        display: table;
        width: 100%;
        height: 70px;
        padding: 10px 5px;
        background-color: rgba(255,255,255,0.95);
        font-size: 8px;
        z-index: 999;
    }

    .menu-box {
        display: table-cell;
        vertical-align: middle;
        width: calc(100% / 6);
        text-align: center;
    }

    .menu-box img {
        width: 18px;
        height: 18px;
        object-fit: contain;
    }
</style>

<nav class="menu">
    <div class="menu-box" onclick="location.href='{{ route('sp.top') }}'">
        <img src="/images/user/icon_home.png">
        <p>ホーム</p>
    </div>
    <div class="menu-box" onclick="location.href='#'">
        <img src="/images/user/icon_search_sp.png">
        <p>検索</p>
    </div>
    <div class="menu-box" onclick="location.href='#'">
        <img src="/images/user/icon_favorite_sp.png">
        <p>お気に入り</p>
    </div>
    <div class="menu-box" onclick="location.href='#'">
        <img src="/images/user/icon_cart_sp.png">
        <p>カート</p>
    </div>
    <div class="menu-box" onclick="location.href='#'">
        <img src="/images/user/icon_history_sp.png">
        <p>購入履歴</p>
    </div>
    <div class="menu-box open-see-more">
        <img src="/images/user/icon_see_more.png">
        <p>もっとみる</p>
    </div>
</nav>
