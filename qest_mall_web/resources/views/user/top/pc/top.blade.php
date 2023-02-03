@extends("layout")
@component('user.layouts.pc.header')
@endcomponent
@section('content')
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
{{-- Main Carousel --}}
<div class="main-carousel-slick">
    @foreach ($top_banners as $top_banner)
        <div>
            <a href="{{ $top_banner->url }}">
                <img class="img" src="{{ $top_banner->image->url }}">
            </a>
        </div>
    @endforeach
</div>

{{-- Content Box --}}
<div class="content-box">
    {{-- Qest mall magazine --}}
    <div class="qmm">
        <h2 class="qmm-title">Qest mall magazine
            <a href="#" style="float:right;font-size:11px;font-weight:normal;">
                Qest mall magazineトップへ
            </a>
        </h2>
        <div class="five-slick qmm-slick">
            @for ($i = 0; $i < 10; $i++)
                <div>
                    <a href="#">
                        <img class="img" src="{{ asset('/images/one_stories/one_stories.png') }}">
                    </a>
                </div>
            @endfor
        </div>
    </div>

    <div style="display:flex;">
        {{-- Left Menu --}}
        <div class="left-menu">
            {{-- 広告 --}}
            <aside class="ad-box">
                <a href="{{ $ads[AdTypeConst::TOP_RECTANGLE]->url }}">
                    <img class="img ad-img" src="{{ asset($ads[AdTypeConst::TOP_RECTANGLE]->image->url) }}">
                </a>
            </aside>

            <div class="left-menu-search-box">
                {{-- 商品カテゴリー --}}
                <section class="left-menu-box">
                    <h2 class="menu-title">
                        商品カテゴリ
                        <a href="{{ route('categories') }}" style="float:right;font-size:13px;font-weight:normal;">
                            一覧
                        </a>
                    </h2>

                    <nav>
                        <ul>
                            @foreach ($major_categoris as $major_category)
                                <li class="has-child">
                                    <a  href="{{ route('category', $major_category->category_id) }}" class="category-title">
                                        {{ $major_category->category_name }}
                                    </a>
                                    <div class="sub-menu">
                                        <div class="major-category-name">
                                            {{ $major_category->category_name }}
                                        </div>
                                        <div class="sub-menu-body">
                                            @foreach ($major_category->categories as $middle_category)
                                                <div class="sub-menu-box">
                                                    <div>
                                                        <img class="category-image" src="{{ asset($middle_category->image->url) }}">
                                                    </div>
                                                    <div class="middle-category-name">
                                                        <a href="{{ route('category', $middle_category->category_id) }}">
                                                            {{ $middle_category->category_name }}
                                                        </a>
                                                    </div>
                                                    <ul class="minor-category">
                                                        @foreach ($middle_category->categories as $minor_category)
                                                        <li class="minor-category-name">
                                                            <a href="{{ route('category', $minor_category->category_id) }}">
                                                                {{ $minor_category->category_name }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </section>

                {{-- ライフシーンから探す --}}
                <section class="left-menu-box">
                    <h2 class="menu-title">ライフシーンから探す</h2>
                    <div>
                        @foreach ($sub_categoris as $sub_category)
                            <a href="#">
                                <img class="img life-style-img" src="{{ asset($sub_category->image->url) }}">
                            </a>
                        @endforeach
                    </div>
                </section>

                {{-- ショップ・ブランド検索 --}}
                <section class="left-menu-box shop-brand-search">
                    <h2 class="menu-title">ショップ・ブランド</h2>
                    <div class="search-container">
                        <form class="ui search search-container-form" action={{ route('shop_brand_search') }}  method="post">
                            @csrf
                            <div class="ui input">
                                <input class="prompt" type="text" name="shop_brand_name">
                            </div>
                            <div class="results"></div>
                            <button>検索</button>
                        </form>
                    </div>
                    <div class="shop-brand-link">
                        <a href="{{ route('shops') }}">ショップ一覧へ</a>
                    </div>
                    <div class="shop-brand-link">
                        <a href="{{ route('brands') }}">ブランド一覧へ</a>
                    </div>
                </section>
            </div>

            {{-- 広告 --}}
            <aside class="ad-box bottom-ad-container">
                <div class="bottom-ad-box">
                    <a href="{{ $ads[AdTypeConst::BOTTOM_RECTANGLE_UPPER]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::BOTTOM_RECTANGLE_UPPER]->image->url) }}">
                    </a>
                </div>
                <div class="bottom-ad-box">
                    <a href="{{ $ads[AdTypeConst::BOTTOM_RECTANGLE_MIDDLE]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::BOTTOM_RECTANGLE_MIDDLE]->image->url) }}">
                    </a>
                </div>
                <div class="bottom-ad-box">
                    <a href="{{ $ads[AdTypeConst::BOTTOM_RECTANGLE_LOWER]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::BOTTOM_RECTANGLE_LOWER]->image->url) }}">
                    </a>
                </div>
            </aside>
        </div>

        {{-- Main Content --}}
        <div class="main-content">
            {{-- Life Scene --}}
            <section class="main-content-box life-scene">
                <h2 class="section-title">LIFE SCENE</h2>
                <div class="life-scene-container">
                    @foreach ($sub_categoris as $sub_category)
                        <div class="life-scene-box">
                            <a href="#">
                                <img class="img life-scene-img" src="{{ asset($sub_category->icon_url) }}">
                            </a>
                            <p class="life-scene-title">{{ $sub_category->sub_category_name }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- おすすめ商品 --}}
            @if (!session('user_id_token'))
                <section class="main-content-box recommend-item">
                    <h2 class="section-title">おすすめ商品</h2>
                    <div class="five-slick item-slick">
                        @foreach ($recommend_items as $item)
                            <div>
                                <a href="{{ route('items_detail', $item->id) }}">
                                    <div class="item-img">
                                        <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                        @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                            <div class="new-img">
                                                <img src="{{ asset('/images/item/new_logo.png') }}">
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                <div class="slider-text">
                                    <div class="shop-name">
                                        <a href="{{ route('shop', $item->shop_id) }}">
                                            {{ $item->shop->shop_name }}
                                        </a>
                                    </div>
                                    <div class="item-name">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                    <div class="price">
                                        <p>{{ number_format($item->normal_price) }}円
                                            @if ($item->is_postage_free == true)
                                                <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            {{-- 人気商品ランキング --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">人気商品ランキング</h2>
                <div class="five-slick rank-item-slick">
                    @php $count = 0; @endphp
                    @foreach ($rank_items as $item)
                        @php $count++; @endphp
                        <div>
                            <p class="rank-num">{{$count}}<span class="rank-text">位</span></p>
                            <a href="{{ route('items_detail', $item->id) }}">
                                <div class="item-img">
                                    <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                    @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                        <div class="new-img">
                                            <img src="{{ asset('/images/item/new_logo.png') }}">
                                        </div>
                                    @endif
                                </div>
                            </a>
                            <div class="slider-text">
                                <div class="shop-name">
                                    <a href="{{ route('shop', $item->shop_id) }}">
                                        {{ $item->shop->shop_name }}
                                    </a>
                                </div>
                                <div class="item-name">
                                    <p>{{ $item->name }}</p>
                                </div>
                                <div class="price">
                                    <p>{{ number_format($item->normal_price) }}円
                                        @if ($item->is_postage_free == true)
                                            <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- 人気ショップランキング --}}
            <section class="main-content-box rank-shop">
                <h2 class="section-title">人気ショップランキング</h2>
                <div class="five-slick rank-shop-slick">
                    @php $count = 0; @endphp
                    @foreach ($rank_shops as  $shop)
                        @php $count++; @endphp
                        <div>
                            <p class="rank-num">{{$count}}<span class="rank-text">位</span></p>
                            <a href="{{ route('shop', $shop->id) }}">
                                <img class="img" src="{{ asset($shop->image->url) }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- 新着ショップ --}}
            <section class="main-content-box latest-shop">
                <h2 class="section-title">新着ショップ</h2>
                <div class="five-slick latest-shop-slick">
                    @foreach ($latest_shops as  $shop)
                        <div>
                            <a href="{{ route('shop', $shop->id) }}">
                                <img class="img" src="{{ asset($shop->image->url) }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- 閲覧履歴からのおすすめ商品 --}}
            @if (session('user_id_token'))
                <section class="main-content-box recommend-by-history-item">
                    <h2 class="section-title">閲覧履歴からのおすすめ商品</h2>
                    <div class="five-slick item-slick">
                        @foreach ($recommend_by_history_items as $item)
                            <div>
                                <a href="{{ route('items_detail', $item->id) }}">
                                    <div class="item-img">
                                        <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                        @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                            <div class="new-img">
                                                <img src="{{ asset('/images/item/new_logo.png') }}">
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                <div class="slider-text">
                                    <div class="shop-name">
                                        <a href="{{ route('shop', $item->shop_id) }}">
                                            {{ $item->shop->shop_name }}
                                        </a>
                                    </div>
                                    <div class="item-name">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                    <div class="price">
                                        <p>{{ number_format($item->normal_price) }}円
                                            @if ($item->is_postage_free == true)
                                                <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif


            {{-- 閲覧商品履歴 --}}
            @if (session('user_id_token'))
                <section class="main-content-box browsing-history-item">
                    <h2 class="section-title">閲覧商品履歴</h2>
                    <div class="five-slick item-slick">
                        @foreach ($browsing_history_items as $item)
                            <div>
                                <a href="{{ route('items_detail', $item->id) }}">
                                    <div class="item-img">
                                        <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                        @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                            <div class="new-img">
                                                <img src="{{ asset('/images/item/new_logo.png') }}">
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                <div class="slider-text">
                                    <div class="shop-name">
                                        <a href="{{ route('shop', $item->shop_id) }}">
                                            {{ $item->shop->shop_name }}
                                        </a>
                                    </div>
                                    <div class="item-name">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                    <div class="price">
                                        <p>{{ number_format($item->normal_price) }}円
                                            @if ($item->is_postage_free == true)
                                                <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            {{-- 新着商品 --}}
            <section class="main-content-box latest-item">
                <h2 class="section-title">新着商品</h2>
                <div class="latest-item-container">
                    @foreach ($latest_items as $item)
                        <div class="latest-item-box">
                            <a href="{{ route('items_detail', $item->id) }}">
                                <div class="item-img">
                                    <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                </div>
                            </a>
                            <div class="slider-text">
                                <div class="shop-name">
                                    <a href="{{ route('shop', $item->shop_id) }}">
                                        {{ $item->shop->shop_name }}
                                    </a>
                                </div>
                                <div class="item-name">
                                    <p>{{ $item->name }}</p>
                                </div>
                                <div class="price">
                                    <p>{{ number_format($item->normal_price) }}円
                                        @if ($item->is_postage_free == true)
                                            <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- クーポン --}}
            <section class="main-content-box coupon">
                <div class="coupon-slick">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($coupons as $coupon)
                            <div>
                                <a href="{{ route('coupons', $coupon->coupon_id) }}">
                                    <img class="img" src="{{ asset($coupon->image->url) }}">
                                </a>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </section>
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/drop_down_menu.js') }}"></script>
@endsection
