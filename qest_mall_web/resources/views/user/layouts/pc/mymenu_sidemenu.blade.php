        {{-- Left Menu --}}
        <div class="mymenu-left-menu" style="position:fixed;width:300px;z-index:999;x">

            <div class="my-menu-left-box">
                {{-- 商品カテゴリー --}}
                <section class="left-menu-box">
                    <nav>
                        <ul>
                            <a href="{{ route("mypage.user_info"); }}" class="menu-title @if($menu_type == 1) menu-select @endif">
                                <li style="margin:0;">
                                        基本情報
                                    <div class="next-page">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route("mypage.notice_settings"); }}" class="menu-title @if($menu_type == 2) menu-select @endif">
                                <li style="margin:0;">
                                        通知設定
                                    <div class="next-page">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route("mypage.credit_cards"); }}" class="menu-title @if($menu_type == 3) menu-select @endif">
                                <li style="margin:0;">
                                        クレジットカード登録情報
                                    <div class="next-page">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route("mypage.purchase_histories"); }}" class="menu-title @if($menu_type == 4) menu-select @endif">
                                <li style="margin:0;">
                                        購入履歴
                                    <div class="next-page">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route('mypage.coupons'); }}" class="menu-title @if($menu_type == 5) menu-select @endif">
                                <li style="margin:0;">
                                        保有クーポン一覧
                                    <div class="next-page">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route('mypage.point_info'); }}" class="menu-title @if($menu_type == 6) menu-select @endif">
                                <li style="margin:0;">
                                        ポイント情報
                                    <div class="next-page">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route('mypage.favorite_items'); }}" class="menu-title @if($menu_type == 7) menu-select @endif">
                                <li style="margin:0;">
                                    お気に入り編集
                                    <div class="next-page">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                            </a>
                            <a href="{{ route('logout'); }}" class="menu-title">
                                <li style="margin:0;">
                                        ログアウト
                                </li>
                            </a>
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
