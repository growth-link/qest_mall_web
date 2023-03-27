@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/item_search.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('shop', $shop) }}

    <div style="margin-top:60px;display:flex;">
        @include('user.layouts.pc.item_sidemenu')

        {{-- Main Content --}}
        <div class="main-content">
            @if($items->isNotEmpty())
            {{-- Qest mall magazine --}}
                <div class="qmm">
                    <h2 class="qmm-title">Qest mall magazine
                        <a href="#" style="float:right;font-size:11px;font-weight:normal;">
                            Qest mall magazineトップへ
                        </a>
                    </h2>
                    <div class="four-slick shop-qmm-slick">
                        @for ($i = 0; $i < 10; $i++)
                            <div>
                                <a href="#">
                                    <img class="img" src="{{ asset('/images/one_stories/one_stories.png') }}">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>

                {{-- 人気商品ランキング --}}
                <section class="main-content-box rank-item">
                    <h2 class="section-title">ショップ内の人気商品ランキング</h2>
                    @include('user.layouts.pc.components.item.rank_items')
                </section>

                {{-- 商品一覧 --}}
                <section class="main-content-box latest-item">
                    <div class="section-title-box">
                        <h2 class="section-title fit-content">
                            商品一覧
                        </h2>
                        @include('user.layouts.pc.components.item.filter_bar')
                    </div>
                    <div class="item-container">
                        @include('user.layouts.pc.components.item.items')
                        {{ $items->appends(request()->query())->links() }}
                    </div>
                </section>
            @else
                <p>ご指定の検索条件に該当する商品はみつかりませんでした</p>
            @endif

            <hr style="border:solid 0.3px #707070;margin:40px 0;">

            <section class="shop-info">
                <div class="shop-info-top">
                    <div class="shop-banner">
                        @empty($shop->banner_url)
                            <img src="{{ asset('/images/shop/no_image_logo.png') }}">
                        @else
                            <img src="{{ asset($shop->banner_url) }}">
                        @endempty
                    </div>
                    <div class="shop-text">
                        <h2 class="section-title">
                            {{ $shop->shop_name }}
                            <button class="inquiry_btn_radius">ショップに問い合わせる</button>
                        </h2>
                        <div class="flex-box">
                            <label class="ECM_CheckboxInput">
                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                <span class="ECM_CheckboxInput-LabelText">メールマガジンに登録する</span>
                            </label>
                        </div>
                        <div class="flex-box">
                            <label class="ECM_CheckboxInput">
                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                <span class="ECM_CheckboxInput-LabelText">お気に入りショップに登録する</span>
                            </label>
                        </div>
                        <ul class="shop-info-link">
                            <li><a>店舗情報</a></li>
                            <li><a>返品特約について</a></li>
                            <li><a>特商法に基づく表示</a></li>
                            <li><a>配送方法について</a></li>
                        </ul>
                    </div>
                </div>
                <div class="shop-info-bottom">
                    <p>{{ $shop->introduction }}</p>
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
    <script src="{{ asset('/js/pc/modal.js') }}"></script>
@endsection
