@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/item_search.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('item_keyword', $keyword) }}

    <div style="margin-top:60px;display:flex;">
        @include('user.layouts.pc.item_sidemenu')

        {{-- Main Content --}}
        <div class="main-content">
            @if($items->isNotEmpty())
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
