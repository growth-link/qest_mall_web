<style>
    footer {
        width: 100%;
        height: 240px;
        background-color: #D9D9D9;
        color: #333333;
        font-size: 9px;
        padding-bottom: 20px;
    }
    .footer-container {
        padding: 40px 20%;
        display: flex;
        justify-content: center;
    }
    .sns-container {
        display: table;
        width: 30%;
        padding: 0 60px;
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
        display: flex;
        width: 70%;
    }
    .site-map-container p {
        line-height: 2em;
        margin-right: 10px;
    }
    .site-map-container a {
        color: #333333;
        font-size: 13px;
    }
    .site-map-section {
        width: calc(100% / 3);
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
        <div class="site-map-container">
            <div class="site-map-section">
                <p><a href="{{ route('top') }}">クエストモール</a></p>
                <p><a href="#">クエストモールマガジン</a></p>
            </div>
            <div class="site-map-section">
                <p><a href="{{ route('categories') }}">カテゴリ一覧</a></p>
                <p><a href="{{ route('shops') }}">ショップ一覧</a></p>
                <p><a href="{{ route('brands') }}">ブランド一覧</a></p>
            </div>
            <div class="site-map-section">
                <p><a href="{{ route('faq') }}">よくある質問（FAQ）</a></p>
                <p><a href="#">企業情報</a></p>
                <p><a href="{{ route('contract') }}">利用規約/個人情報保護方針</a></p>
                <p><a href="#">WAON POINT 規約</a></p>
            </div>
        </div>
        <div class="sns-container">
            <div class="sns-box" onclick="location.href='#'">
                <img src="{{ asset('/images/icon_tiktok.png') }}">
            </div>
            <div class="sns-box" onclick="location.href='#'">
                <img src="{{ asset('/images/icon_instagram.png') }}">
            </div>
            <div class="sns-box" onclick="location.href='#'">
                <img src="{{ asset('/images/icon_twitter.png') }}">
            </div>
        </div>
    </div>

    <p class="copy-right">Copyright © OPA co.,ltd All rights reserved.</p>
</footer>
