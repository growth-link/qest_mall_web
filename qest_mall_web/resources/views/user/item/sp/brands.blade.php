@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/shops_brands.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            {{ Breadcrumbs::render('sp.brands') }}

            <h2 class="section-title">ブランド一覧</h2>

            <div class="search-container brand-search">
                <form class="ui search search-container-form" action={{ route('sp.brand_search') }}  method="get">
                    @csrf
                    <div class="ui input">
                        <input class="prompt" type="text" name="brand_name" placeholder="ブランド名から探す">
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

            @foreach ($indexes as $index => $value)
                <div class="index-name" id="{{ $index }}">
                    {{ $value }}
                </div>
                <div class="index-box">
                    @foreach ($brands_array[$value] as $brand)
                        <div class="brand-box">
                            <a href="{{ route('sp.brand', $brand) }}">{{ $brand->brand_name }}</a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    @component('user.layouts.sp.footer')
    @endcomponent
    {{-- @include('user.layouts.sp.menu') --}}
</div>
@endsection
@section("script")
    <script src="{{ asset('/js/page_link.js') }}"></script>
    <script src="{{ asset('/js/sp/text_trim.js') }}"></script>
@endsection
