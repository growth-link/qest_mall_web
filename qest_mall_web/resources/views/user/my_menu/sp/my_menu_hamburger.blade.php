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

    #overlay_filter {
        bottom: 140px;
    }

    .overlay.show {
        opacity: 1;
        pointer-events: auto;
    }

    .overlay .close {
        position: absolute;
        top: 24px;
        right: 24px;
        font-size: 32px;
        cursor: pointer;
    }

    .overlay .prev-page {
        position: absolute;
        top: 24px;
        display: flex;
    }

    .overlay .prev-page p {
        color: #6C6C6C;
        font-size: 13px;
        margin-left: 10px;
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
        color: #6C6C6C;
        font-size: 13px;
        display: flex;
    }

    .overlay li:has(.ECM_CheckboxInput) {
        padding: 0px;
        height: auto;
        display: inline;
    }

    .overlay .ECM_CheckboxInput {
        padding: 20px 16px;
    }

    .overlay li .next-page {
        margin-left: auto;
    }

    .overlay li img{
        width: 10px;
        object-fit: contain;
    }

    .overlay.show li {
        opacity: 1;
        transform: none;
    }

    .overlay .icon-arrow-right {
        margin-left: 20px;
    }

    .overlay .search-container {
        height: 78px;
    }

    .overlay .search-box {
        margin: 0;
        width: 100%;
    }

    .overlay .text-input {
        flex-wrap: wrap;
        justify-content: space-between;
        height: 110px;
    }

    .overlay .modal-section-title {
        width: 100%;
    }

    .overlay .switch_TextInput {
        height: 50px;
    }

    .overlay input[type="number"] {
        width: 44%;
    }

    .overlay .switch-input {
        height: 70px;
    }

    .overlay .switch_LabelText {
        color: #6C6C6C;
        font-size: 13px;
    }

    .overlay .flex-box {
        justify-content: space-between;
    }

    .overlay input[type="text"] {
        width: 100%;
    }

    /* 絞りこみ検索ボタンなど */
    .actions {
        position: fixed;
        top: auto;
        bottom: 70px;
        right: 0;
        left: 0;
        padding: 20px;
        background: rgba(255,255,255,0.95);
        opacity: 0;
        pointer-events: none;
        transition: opacity .6s;
        z-index: 999;
        height: 90px;
        justify-content: space-between;
    }

    .actions.show {
        opacity: 1;
        pointer-events: auto;
    }

    .actions .clear-button {
        width: 30%;
        margin: 0;
        height: 50px;
    }

    .actions .search-button,
    .actions .add-button {
        width: 68%;
        margin: 0;
        height: 50px;
    }
</style>

<div id="overlay_my_menu_hamburger" class="overlay">
    <img class="close" src="/images/user/icon_close.png">
    <nav>
        <ul>
            <li onclick="location.href='{{ route('sp.mypage.user_info') }}'">
                <p>基本情報</p>
                <div class="next-page">
                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                </div>
            </li>
            <li onclick="location.href='#'">
                <p>通知設定</p>
                <div class="next-page">
                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                </div>
            </li>
            <li onclick="location.href='#'">
                <p>クレジットカード登録情報</p>
                <div class="next-page">
                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                </div>
            </li>
            <li onclick="location.href='#'">
                <p>購入履歴</p>
                <div class="next-page">
                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                </div>
            </li>
            <li onclick="location.href='#'">
                <p>保有クーポン一覧</p>
                <div class="next-page">
                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                </div>
            </li>
            <li onclick="location.href='#'">
                <p>ポイント情報</p>
                <div class="next-page">
                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                </div>
            </li>
            <li onclick="location.href='#'">
                <p>お気に入り編集</p>
                <div class="next-page">
                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                </div>
            </li>
            <li class="open-logout">
                <p>ログアウト</p>
            </li>
            <li class="open-quit">
                <p>退会手続き</p>
            </li>
        </ul>
    </nav>
</div>

<x-user.sp.overlay>
    <x-slot name="overlay_id">overlay_quit</x-slot>
    <x-slot name="title">退会手続き</x-slot>
    <p>本当に退会しますか？</p>
    <x-slot name="url">{{ route('sp.quit') }}</x-slot>
    <x-slot name="primary_btn">退会する</x-slot>
    <x-slot name="secondary_btn">キャンセル</x-slot>
</x-user.sp.overlay>
