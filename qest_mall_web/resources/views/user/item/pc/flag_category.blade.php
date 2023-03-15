@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/item_search.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('flag_category', $sub_category) }}
</div>

{{-- Top Image --}}
<div class="sub-category-top-banner">
    <img src="{{ asset($sub_category->top_banner_url) }}">
</div>

{{-- Content Box --}}
<div class="content-box">
    {{-- Qest mall magazine --}}
    <div class="qmm">
        <h2 class="qmm-title">Qest mall magazine&emsp;{{ $sub_category->sub_category_name }}
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
        @include('user.layouts.pc.item_sidemenu')

        {{-- Main Content --}}
        <div class="main-content">
            @include('user.layouts.pc.components.item.life_scene')

            @if($items->isNotEmpty())
            {{-- 人気商品ランキング --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">{{ $sub_category->sub_category_name }}の人気商品ランキング</h2>
                @include('user.layouts.pc.components.item.rank_items')
            </section>

            {{-- 商品一覧 --}}
            <section class="main-content-box latest-item">
                <div class="section-title-box">
                    <h2 class="section-title fit-content">
                        {{ $sub_category->sub_category_name }}の商品一覧
                    </h2>
                    @include('user.layouts.pc.components.item.filter_bar')
                </div>
                <div class="item-container">
                    @include('user.layouts.pc.components.item.items')
                    {{ $items->links() }}
                </div>
            </section>
        @else
            <p>ご指定の検索条件に該当する商品はみつかりませんでした</p>
        @endif
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
