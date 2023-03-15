@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/mall_top.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
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
        <div style="display:flex;">
            {{-- Main Content --}}
            <div class="main-content">
                {{-- Qest mall magazine --}}
                <section class="main-content-box qmm">
                    <h2 class="section-title">Qest mall magazine
                        <a href="#" style="float:right;font-size:11px;font-weight:normal;">
                            Qest mall magazineトップへ
                        </a>
                    </h2>
                    <div class="three-slick qmm-slick">
                        @for ($i = 0; $i < 10; $i++)
                            <div>
                                <a href="#">
                                    <img class="img" src="{{ asset('/images/one_stories/one_stories.png') }}">
                                </a>
                            </div>
                        @endfor
                    </div>
                </section>

                @include('user.layouts.sp.components.item.life_scene')

                {{-- おすすめ商品 --}}
                @if (!session('user_id_token'))
                    <section class="main-content-box recommend-item">
                        <h2 class="section-title">おすすめ商品</h2>
                        <div class="three-slick item-slick">
                            @foreach ($recommend_items as $item)
                                <div>
                                    <a href="{{ route('sp.items_detail', $item->id) }}">
                                        <div class="item-img">
                                            @empty($item->is_sumbnail_image->image_url)
                                                <img class="img" src="{{ asset('/images/item/no_image_logo.png') }}">
                                            @else
                                                <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                            @endempty
                                            @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                                <div class="new-img">
                                                    <img src="{{ asset('/images/item/new_logo.png') }}">
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="slider-text">
                                        <div class="shop-name">
                                            <a href="{{ route('sp.shop', $item->shop_id) }}">
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
                    @include('user.layouts.sp.components.item.rank_items')
                </section>

                {{-- 人気ショップランキング --}}
                <section class="main-content-box rank-shop">
                    <h2 class="section-title">人気ショップランキング</h2>
                    <div class="three-slick rank-shop-slick">
                        @php $count = 0; @endphp
                        @foreach ($rank_shops as  $shop)
                            @php $count++; @endphp
                            <div>
                                <p class="rank-num">{{$count}}<span class="rank-text">位</span></p>
                                <a href="{{ route('sp.shop', $shop->id) }}">
                                    <img class="img" src="{{ asset($shop->image->url) }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- 新着ショップ --}}
                <section class="main-content-box latest-shop">
                    <h2 class="section-title">新着ショップ</h2>
                    <div class="three-slick latest-shop-slick">
                        @foreach ($latest_shops as  $shop)
                            <div>
                                <a href="{{ route('sp.shop', $shop->id) }}">
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
                        <div class="three-slick item-slick">
                            @foreach ($recommend_by_history_items as $item)
                                <div>
                                    <a href="{{ route('sp.items_detail', $item->id) }}">
                                        <div class="item-img">
                                            @empty($item->is_sumbnail_image->image_url)
                                                <img class="img" src="{{ asset('/images/item/no_image_logo.png') }}">
                                            @else
                                                <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                            @endempty
                                            @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                                <div class="new-img">
                                                    <img src="{{ asset('/images/item/new_logo.png') }}">
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="slider-text">
                                        <div class="shop-name">
                                            <a href="{{ route('sp.shop', $item->shop_id) }}">
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
                        <div class="three-slick item-slick">
                            @foreach ($browsing_history_items as $item)
                                <div>
                                    <a href="{{ route('sp.items_detail', $item->id) }}">
                                        <div class="item-img">
                                            @empty($item->is_sumbnail_image->image_url)
                                                <img class="img" src="{{ asset('/images/item/no_image_logo.png') }}">
                                            @else
                                                <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                            @endempty
                                            @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                                <div class="new-img">
                                                    <img src="{{ asset('/images/item/new_logo.png') }}">
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="slider-text">
                                        <div class="shop-name">
                                            <a href="{{ route('sp.shop', $item->shop_id) }}">
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
                    <div class="item-container">
                        @include('user.layouts.sp.components.item.items')
                    </div>
                </section>

                {{-- クーポン --}}
                <section class="main-content-box coupon">
                    <div class="coupon-slick">
                        @for ($i = 0; $i < 10; $i++)
                            @foreach ($coupons as $coupon)
                                <div>
                                    <a href="{{ route('sp.coupons', $coupon->id) }}">
                                        <img class="img" src="{{ asset($coupon->image->url) }}">
                                    </a>
                                </div>
                            @endforeach
                        @endfor
                    </div>
                </section>

                {{-- 広告 --}}
                <aside class="main-content-box left-menu-box">
                    <a href="{{ $ads[AdTypeConst::MOBILE]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::MOBILE]->image->url) }}">
                    </a>
                </aside>
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
@endsection
