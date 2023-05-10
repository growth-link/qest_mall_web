<nav class="navbar">
    <ul class="menu" style="margin-right:auto;">
        <li>
            <a href="{{ route('admin.mall_top'); }}">
                <img src="/images/admin/icon_home.png" style="width:15px;height:15px;margin-left:10px;margin-top:5px;">
            </a>
        </li>
        <li class="dropdown">
            <a href="#">ショップ基本管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu" style="width:250px;">
                <li><a href="#">契約情報</a></li>
                <li><a href="#">ショップ情報</a></li>
                <li><a href="#">配送マスタ</a></li>
                <li><a href="#">管理ユーザー</a></li>
                <li><a href="#">営業日カレンダー</a></li>
                <li><a href="#">返品・返金について</a></li>
                <li><a href="#">特定商取引法に基づく表記</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>
        
        <li class="dropdown">
            <a href="#">商品情報<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu"  style="width:250px;">
                <li><a href="{{ route('admin.item.items') }}">商品一覧・編集</a></li>
                <li><a href="{{ route('admin.item.items') }}">商品登録</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>

        <li class="dropdown">
            <a href="#">クーポン管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu"  style="width:250px;">
                <li><a href="{{ route('admin.item.items') }}">クーポン一覧・編集</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>

        <li class="dropdown">
            <a href="#">売上・会計管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu"  style="width:250px;">
                <li><a href="{{ route('statistics') }}">売上統計</a></li>
                <li><a href="{{ route('monthly') }}">月次会計</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>

        <li class="dropdown">
            <a href="#">顧客管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu" style="width:250px;">
                <li><a href="#">顧客一覧</a></li>
                <li><a href="#">メルマガ作成</a></li>
                <li><a href="#">メルマガ配信履歴</a></li>
            </ul>
            <img class="arrow" src="/images/admin/arrow_down.png" style="margin-left:10px;margin-top:12px;">
            <div class="dropdown-cover"></div>
        </li>
    </ul>


    <ul class="menu" style="margin-left:auto;">
        <li class="dropdown">
            <button class="primary_btn_radius_menu dropdown">受注管理</button>
            <ul class="dropdown-menu" style="width:200px;left:-50px;">
                <li><a href="{{ route('orders'); }}">受注履歴一覧</a></li>
                <li><a href="{{ route('new-orders'); }}">新規注文一覧</a></li>
                <li><a href="{{ route('before-sends'); }}">発送準備一覧</a></li>
                <li><a href="{{ route('cancel-requests'); }}">キャンセル依頼一覧</a></li>
                <li><a href="{{ route('return-requests'); }}">返品処理依頼一覧</a></li>
            </ul>
            <div class="dropdown-cover"></div>
        </li>
    </ul>
</nav>