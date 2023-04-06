@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/shops_brands.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            {{ Breadcrumbs::render('sp.shops') }}

            <h2 class="section-title">ショップ一覧</h2>

            <div class="search-container shop-search">
                <form class="ui search search-container-form" action={{ route('sp.shop_search') }}  method="get">
                    @csrf
                    <div class="ui input">
                        <input class="prompt" type="text" name="shop_name" placeholder="ショップ名から探す">
                    </div>
                    <div class="results"></div>
                    <button>検索</button>
                </form>
            </div>

            <div class="shop-list">
                @foreach ($shops as $shop)
                    <a class="shop-box" href="{{ route('sp.shop', $shop) }}">
                        <div class="shop-img">
                            @empty($shop->image->url)
                                <img src="{{ asset('/images/shop/no_image_logo.png') }}">
                            @else
                                <img src="{{ asset($shop->image->url) }}">
                            @endempty
                        </div>
                        <div class="shop-text">
                            <div class="shop-name">{{ $shop->shop_name }}</div>
                            <p class="shop-introduction">{{ $shop->introduction }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @component('user.layouts.sp.footer')
    @endcomponent
    @component('user.layouts.sp.menu')
    @endcomponent
</div>
@endsection
@section("script")
    <script src="{{ asset('js/sp/hamburger_menu.js') }}"></script>
    <script src="{{ asset('/js/sp/text_trim.js') }}"></script>
@endsection
