<style>
    .fixed {
        /* 背景をスクロールさせない */
        height: 100%;
        width: 100%;
        position: fixed;
    }
    .overlay {
        position: fixed;
        top: 0;
        bottom: 70px;
        right: 0;
        left: 0;
        background: #ffffff;
        padding: 70px 15px;
        opacity: 0;
        pointer-events: none;
        transition: opacity .6s;
        z-index: 998;
        overflow: scroll;
    }

    .overlay.show {
        opacity: 1;
        pointer-events: auto;
    }

    .overlay #close {
        position: absolute;
        top: 24px;
        right: 24px;
        font-size: 32px;
        cursor: pointer;
    }

    .overlay ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .overlay li {
        height: 57px;
        padding: 20px;
        opacity: 0;
        transform: translateY(16px);
        transition: opacity .3s, transform .3s;
        color: #6C6C6C;
        font-size: 13px;
        display: flex;
    }

    .overlay li img{
        margin-left: auto;
        width: 10px;
        object-fit: contain;
    }

    .overlay.show li {
        opacity: 1;
        transform: none;
    }
</style>

<div class="overlay">
    <img id="close" src="/images/user/icon_close.png">
    <nav>
        <ul>
            <li onclick="location.href='#'">
                <p>マイメニュー</p>
                <img src="/images/user/icon_arrow_right.png">
            </li>
            <li onclick="location.href='#'">
                <p>お知らせ</p>
                <img src="/images/user/icon_arrow_right.png">
            </li>
            <li onclick="location.href='#'">
                <p>カテゴリ一覧</p>
                <img src="/images/user/icon_arrow_right.png">
            </li>
            <li onclick="location.href='#'">
                <p>ショップ一覧</p>
                <img src="/images/user/icon_arrow_right.png">
            </li>
            <li onclick="location.href='#'">
                <p>ブランド一覧</p>
                <img src="/images/user/icon_arrow_right.png">
            </li>
            <li onclick="location.href='#'">
                <p>Qest mall magazine</p>
                <img src="/images/user/icon_arrow_right.png">
            </li>
            <li onclick="location.href='#'">
                <p>ヘルプ</p>
                <img src="/images/user/icon_arrow_right.png">
            </li>
        </ul>
    </nav>
</div>
