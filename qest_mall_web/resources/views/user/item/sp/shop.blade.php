@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/sp/item_search.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            {{ Breadcrumbs::render('sp.shop', $shop) }}

            @if ($items->isNotEmpty())
                {{-- 人気商品ランキング --}}
                <section class="main-content-box rank-item">
                    <h2 class="section-title">ショップ内の人気商品ランキング</h2>
                    @include('user.layouts.sp.components.item.rank_items')
                </section>

                {{-- 商品一覧 --}}
                <section class="main-content-box latest-item">
                    <div class="section-title-box">
                        <h2 class="section-title fit-content">
                            商品一覧
                        </h2>
                    </div>
                    @include('user.layouts.sp.components.item.filter_bar')
                    <div class="item-container">
                        @include('user.layouts.sp.components.item.items')
                        {{ $items->links() }}
                    </div>
                </section>
            @else
                <p class="no-result">ご指定の検索条件に該当する商品はみつかりませんでした</p>
            @endif

            <hr style="border:solid 0.3px #EBEBEB;margin:40px 15px;">

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
                    </div>
                </div>
                <div class="shop-info-bottom">
                    <button class="inquiry_btn_radius">ショップに問い合わせる</button>
                    <ul class="shop-info-link">
                        <li><a>店舗情報</a></li>
                        <li><a>返品特約について</a></li>
                    </ul>
                    <ul class="shop-info-link">
                        <li><a>特商法に基づく表示</a></li>
                        <li><a>配送方法について</a></li>
                    </ul>
                    <p>{{ $shop->introduction }}</p>
                </div>
            </section>
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
