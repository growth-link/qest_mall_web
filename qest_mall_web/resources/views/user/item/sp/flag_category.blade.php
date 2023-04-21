@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/item_search.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            {{ Breadcrumbs::render('sp.flag_category', $sub_category) }}

            {{-- Top Image --}}
            <div class="sub-category-top-banner">
                <img src="{{ asset($sub_category->sp_top_banner_url) }}">
            </div>

            {{-- Qest mall magazine --}}
            <section class="main-content-box qmm">
                <h2 class="section-title flag-category-qmm-title">Qest mall magazine
                    <a href="#" style="float:right;font-size:11px;font-weight:normal;">
                        Qest mall magazineトップへ
                    </a>
                </h2>
                <h2 class="section-title">
                    {{ $sub_category->sub_category_name }}
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

            @if ($items->isNotEmpty())
                {{-- 人気商品ランキング --}}
                <section class="main-content-box rank-item">
                    <h2 class="section-title">{{ $sub_category->sub_category_name }}の人気商品ランキング</h2>
                    @include('user.layouts.sp.components.item.rank_items')
                </section>

                {{-- 商品一覧 --}}
                <section class="main-content-box latest-item">
                    <div class="section-title-box">
                        <h2 class="section-title fit-content">
                            {{ $sub_category->sub_category_name }}の商品一覧
                        </h2>
                    </div>
                    @include('user.layouts.sp.components.item.filter_bar')
                    <div class="item-container">
                        @include('user.layouts.sp.components.item.items')
                        {{ $items->appends(request()->query())->links() }}
                    </div>
                </section>
            @else
                <p class="no-result">ご指定の検索条件に該当する商品はみつかりませんでした</p>
            @endif
        </div>
    </div>
    @component('user.layouts.sp.footer')
    @endcomponent
    @include('user.layouts.sp.menu')
</div>
@endsection
@section("script")
@endsection
