<style>
    header {
        background-color: #ffffff;
    }

    header .top-container {
        margin: 15px 0;
        padding: 0 15px;
        display: flex;
    }

    header nav {
        margin-left: auto;
    }

    header .menu-box {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        white-space: nowrap;
    }

    header .top-container .menu-box img {
        margin-top: 5px;
        margin-right: 10px;
        width: 18px;
        object-fit: contain;
    }
</style>
<header>
    <div class="top-container">
        <a href="{{ route('sp.top') }}">
            <img src="/images/qest_mall_gray.png" style="height:24px;">
        </a>
        <nav>
            <div class="menu-box open-my-menu-hamburger">
                <img src="/images/user/icon_hamburger.png">
            </div>
        </nav>
    </div>
</header>
@component('user.my_menu.sp.my_menu_hamburger')
@endcomponent
