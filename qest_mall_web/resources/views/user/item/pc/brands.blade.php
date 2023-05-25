@extends("layout")
@section('content')
@if($is_login)
    @component('user.layouts.pc.header')
    @endcomponent
@else
    @component('user.layouts.pc.guest_header')
    @endcomponent
@endif
<link rel="stylesheet" href="{{ asset('css/pc/shops_brands.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('brands') }}

    <div class="category-header">
        <h2 class="section-title">ブランド一覧</h2>

        <div class="search-container brand-search">
            <form class="ui search search-container-form" action={{ route('brand_search') }}  method="get">
                @csrf
                <div class="ui input">
                    <input class="prompt" type="text" name="brand_name" placeholder="ブランドから探す">
                </div>
                <div class="results"></div>
                <button>検索</button>
            </form>
        </div>

        <div class="index-container" id="page-link">
            @php
                $indexes = range('A','Z');
                $indexes[] = 'その他';
            @endphp
            @foreach ($indexes as $index => $value)
                <a class="index" href='#{{ $index }}'">
                    <p>{{ $value }}</p>
                </a>
            @endforeach
        </div>
    </div>

    {{-- Main Content --}}
    <div class="main-content">
        @foreach ($indexes as $index => $value)
            <div class="index-name" id="{{ $index }}">
                {{ $value }}
            </div>
            <div class="index-box">
                @foreach ($brands_array[$value] as $brand)
                    <div class="brand-box">
                        <a href="{{ route('brand', $brand) }}">{{ $brand->brand_name }}</a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/page_link.js') }}"></script>
@endsection
