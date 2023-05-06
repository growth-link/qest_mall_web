<nav class="navbar">
    <ul class="menu" style="margin-right:auto;">
        <li>
            <a href="{{ route('admin.mall_top'); }}">
                <img src="/images/admin/icon_home.png" style="width:15px;height:15px;margin-left:10px;margin-top:5px;">
            </a>
        </li>

        <li class="dropdown">
            <a href="#">モール基本情報<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu" style="width:250px;">
                <li><a href="{{ route('admin.basic-info'); }}">基本情報</a></li>
                <li><a href="{{ route('admin.terms-of-open'); }}">出典規約</a></li>
                <li><a href="{{ route('admin.terms-of-service'); }}">利用規約/個人情報保護方針</a></li>
                <li><a href="{{ route('admin.adminUsers'); }}">管理ユーザー</a></li>
                <li><a href="{{ route('admin.staff'); }}">スタッフマスタ</a></li>
                <li><a href="{{ route('admin.ad-banners'); }}">トップバナー編集</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>

        <li class="dropdown">
            <a href="#">商品情報<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu"  style="width:250px;">
                <li><a href="{{ route('admin.item.items') }}">出品商品一覧</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>
        
        <li class="dropdown">
            <a href="#">顧客管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu" style="width:250px;">
                <li><a href="#">会員一覧</a></li>
                <li><a href="#">メルマガ作成</a></li>
                <li><a href="#">メルマガ配信履歴</a></li>
                <li><a href="#">メルマガ配信リスト</a></li>
                <li><a href="#">お知らせ作成・編集</a></li>
                <li><a href="#">お知らせ配信履歴</a></li>
                <li><a href="#">お知らせ配信リスト</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>
    </ul>

    <ul class="menu" style="margin-left:auto;">
        <li class="dropdown">
            <button class="primary_btn_radius_menu dropdown">クーポン管理</button>
            {{-- <a href="#">モール基本情報<i class="fas fa-chevron-down"></i></a> --}}
            <ul class="dropdown-menu" style="width:200px;left:-50px;">
                <li><a href="{{ route('admin.coupons'); }}">クーポン一覧・編集</a></li>
                <li><a href="{{ route('admin.entry_items'); }}">参加申請一覧</a></li>
                <li><a href="{{ route('admin.coupons.create') }}">新規クーポン追加</a></li>
            </ul>
            <div class="dropdown-cover"></div>
        </li>
        <li class="dropdown">
            <button class="primary_btn_radius_menu dropdown">ショップ管理</button>
            {{-- <a href="#">商品情報<i class="fas fa-chevron-down"></i></a> --}}
            <ul class="dropdown-menu"  style="width:200px;left:-50px;">
                <li><a href="{{ route('admin.mall.shops'); }}">ショップ一覧・編集</a></li>
                <li><a href="{{ route('admin.mall.release_request'); }}">公開申請一覧</a></li>
                <li><a href="{{ route('admin.mall.change_request'); }}">変更申請一覧</a></li>
                <li><a href="{{ route('admin.shop.shops.create'); }}" class="selected">新規ショップ追加</a></li>
                <li><a href="{{ route('admin.notices.send_lists'); }}">お知らせ配信リスト</a></li>
                <li><a href="{{ route('admin.notices.send_lists.create'); }}">お知らせ作成・編集</a></li>
                <li><a href="{{ route('admin.notices.send_lists.edit'); }}">お知らせ配信履歴</a></li>
            </ul>
            <div class="dropdown-cover"></div>
        </li>
        <li class="dropdown">
            <button class="primary_btn_radius_menu dropdown">売上・会計管理</button>
            <ul class="dropdown-menu" style="width:200px;left:-50px;">
                <li><a href="{{ route('statistics'); }}">統計情報</a></li>
                <li><a href="{{ route('histories'); }}">会計履歴</a></li>
                <li><a href="{{ route('monthly'); }}">月別精算明細</a></li>
            </ul>
            <div class="dropdown-cover"></div>
        </li>
    </ul>
</nav>