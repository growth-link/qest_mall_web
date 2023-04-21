        {{-- Left Menu --}}
        <div class="mymenu-left-menu">

            <div class="my-menu-left-box">
                {{-- 商品カテゴリー --}}
                <section class="left-menu-box">
                    <nav>
                        <ul>
                            <li>
                                <a href="#" class="menu-title">
                                    基本情報
                                </a>
                                <div class="next-page">
                                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                </div>
                            </li>
                            <li>
                                <a href="#" class="menu-title">
                                    通知設定
                                </a>
                                <div class="next-page">
                                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                </div>
                            </li>
                            <li>
                                <a href="#" class="menu-title">
                                    クレジットカード登録情報
                                </a>
                                <div class="next-page">
                                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                </div>
                            </li>
                            <li>
                                <a href="#" class="menu-title">
                                    購入履歴
                                </a>
                                <div class="next-page">
                                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                </div>
                            </li>
                            <li>
                                <a href="#" class="menu-title">
                                    保有クーポン一覧
                                </a>
                                <div class="next-page">
                                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                </div>
                            </li>
                            <li>
                                <a href="#" class="menu-title">
                                    ポイント情報
                                </a>
                                <div class="next-page">
                                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                </div>
                            </li>
                            <li>
                                <a href="#" class="menu-title">
                                    お気に入り編集
                                </a>
                                <div class="next-page">
                                    <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                </div>
                            </li>
                            <li>
                                <a href="#" class="menu-title">
                                    ログアウト
                                </a>
                            </li>
                            <li onclick="showModal();">
                                <a class="menu-title">
                                    退会手続き
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>

        <x-user.pc.modal>
            <x-slot name="title">退会手続き</x-slot>
            <p>本当に退会しますか？</p>
            <x-slot name="url">{{ route('quit') }}</x-slot>
            <x-slot name="primary_btn">退会する</x-slot>
            <x-slot name="secondary_btn">キャンセル</x-slot>
        </x-user.pc.modal>
