@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/shops_brands.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('shops') }}

    <div class="category-header">
        <h2 class="section-title">ショップ一覧</h2>

        <div class="search-container shop-search">
            <form class="ui search search-container-form" action={{ route('shop_search') }}  method="get">
                @csrf
                <div class="ui input">
                    <input class="prompt" type="text" name="shop_name" placeholder="ショップ名から探す">
                </div>
                <div class="results"></div>
                <button>検索</button>
            </form>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="main-content">
        <div class="shop-list">
            @foreach ($shops as $shop)
                <a class="shop-box" href="{{ route('shop', $shop) }}">
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
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/text_trim.js') }}"></script>
@endsection
