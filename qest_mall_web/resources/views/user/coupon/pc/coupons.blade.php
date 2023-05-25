@extends("layout")
@if($is_login)
    @component('user.layouts.pc.header')
    @endcomponent
@else
    @component('user.layouts.pc.guest_header')
    @endcomponent
@endif
@section('content')
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
{{-- Main Carousel --}}
<div class="main-carousel-slick">
    <div>
        {{-- <a href="{{ $coupon_banner->url }}">
            <img class="img" src="{{ $coupon_banner->image->url }}">
        </a> --}}
    </div>
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

        {{-- Main Content --}}
        <div class="main-content">
            
            {{-- 人気商品ランキング --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">人気商品ランキング</h2>
                {{-- @include('user.layouts.pc.components.item.rank_items') --}}
            </section>


            {{-- 新着商品 --}}
            <section class="main-content-box latest-item">
                <h2 class="section-title">クーポン対象商品</h2>
                <div class="item-container">
                    @include('user.layouts.pc.components.item.items')
                </div>
            </section>


            {{-- 参加ショップ --}}
            <section class="main-content-box">
                <h1 class="section-title">新着ショップ</h1>
                <div class="five-slick latest-shop-slick">
                    @foreach ($shops as  $shop)
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
            {{-- <section class="main-content-box latest-item">
                <h2 class="section-title">新着商品</h2>
                <div class="item-container">
                    @include('user.layouts.pc.components.item.items')
                </div>
            </section> --}}

            {{-- クーポン --}}
            {{-- <section class="main-content-box coupon">
                <div class="coupon-slick">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($coupons as $coupon)
                            <div>
                                <a href="{{ route('coupons', $coupon->id) }}">
                                    <img class="img" src="{{ asset($coupon->image->url) }}">
                                </a>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </section> --}}
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/drop_down_menu.js') }}"></script>
@endsection
