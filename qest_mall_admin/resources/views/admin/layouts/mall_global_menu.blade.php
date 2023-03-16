<nav class="navbar">
    <ul class="menu" style="margin-right:auto;">
        <li class="dropdown">
            <a href="#">モール基本情報<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu" style="width:250px;">
                <li><a href="#">基本情報</a></li>
                <li><a href="#">出典規約</a></li>
                <li><a href="#">利用規約/個人情報保護方針</a></li>
                <li><a href="#">管理ユーザー</a></li>
                <li><a href="#">スタッフマスタ</a></li>
                <li><a href="#">トップバナー編集</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">商品情報<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu"  style="width:250px;">
                <li><a href="{{ route('admin.item.items') }}">出品商品一覧</a></li>
            </ul>
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
        </li>
    </ul>    

    <div style="margin-left:auto;">
        <button class="primary_btn_radius_menu">
            クーポン管理
        </button>
        <button class="primary_btn_radius_menu">
            ショップ管理
        </button>
        <button class="primary_btn_radius_menu">
            売上・会計管理
        </button>
    </div>

</nav>