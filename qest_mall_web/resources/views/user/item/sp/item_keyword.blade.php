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
            {{ Breadcrumbs::render('sp.item_keyword', $keyword) }}

            @if ($items->isNotEmpty())
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
    {{-- @include('user.layouts.sp.menu') --}}
</div>
@endsection
@section("script")
@endsection
