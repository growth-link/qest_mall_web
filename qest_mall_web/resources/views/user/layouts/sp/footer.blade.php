<style>
    footer {
        width: 100%;
        height: 460px;
        background-color: #D9D9D9;
        color: #333333;
        font-size: 9px;
    }
    .sns-container {
        display: table;
        width: 100%;
        padding: 40px 30% 0;
    }
    .sns-box {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }
    .sns-box img {
        width: 24px;
        object-fit: contain;
        cursor: pointer;
        margin: 10px;
    }
    .site-map-container {
        width: 100%;
        margin: 20px 30px 40px;
    }
    .site-map-container p {
        line-height: 2em;
    }
    .site-map-container a {
        color: #333333;
        font-size: 11px;
    }
    .copy-right {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 60px;
    }
</style>
<footer>
    <div class="footer-container">
        <div class="sns-container">
            <div class="sns-box" onclick="location.href='#'"><img src="{{ asset('/images/icon_tiktok.png') }}"></div>
            <div class="sns-box" onclick="location.href='#'"><img src="{{ asset('/images/icon_instagram.png') }}"></div>
            <div class="sns-box" onclick="location.href='#'"><img src="{{ asset('/images/icon_twitter.png') }}"></div>
        </div>
        <div class="site-map-container">
            <p><a href="{{ route('sp.top') }}">クエストモール</a></p>
            <p><a href="#">クエストモールマガジン</a></p>
            <p><a href="{{ route('sp.categories') }}">カテゴリ一覧</a></p>
            <p><a href="{{ route('sp.shops') }}">ショップ一覧</a></p>
            <p><a href="{{ route('sp.brands') }}">ブランド一覧</a></p>
            <p><a href="{{ route('sp.faq') }}">よくある質問（FAQ）</a></p>
            <p><a href="#">企業情報</a></p>
            <p><a href="{{ route('sp.contract') }}">利用規約/個人情報保護方針</a></p>
            <p><a href="#">WAON POINT 規約</a></p>
        </div>
    </div>
    <p class="copy-right">Copyright © OPA co.,ltd All rights reserved.</p>
</footer>
