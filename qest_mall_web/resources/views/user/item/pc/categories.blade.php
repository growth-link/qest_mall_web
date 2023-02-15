@extends("layout")
@component('user.layouts.pc.header')
@endcomponent
@section('content')
<link rel="stylesheet" href="{{ asset('css/pc/categories.css') }}">

<div class="content-box">
    {{ Breadcrumbs::render('categories') }}

    <div class="category-header">
        <h2 class="section-title">カテゴリ一覧</h2>
        <div class="index-container" id="page-link">
            @php $count = 0; @endphp
            @foreach ($major_categoris as $major_category)
                @php $count++; @endphp
                <a class="index" href='#category{{ $count }}'">
                    <p>{{ $major_category->category_name }}</p>
                    <img class="img" src="{{ asset('/images/categories/icon_arrow_down.png') }}">
                </a>
            @endforeach
        </div>
    </div>
</div>

<hr class="category-header-partition">

<div class="content-box">
    <div class="main-content">
        @foreach ($major_categoris as $major_category)
            <div class="major-category-name" id="category{{ $major_category->id }}">
                <a href="{{ route('category', $major_category->id) }}">
                {{ $major_category->category_name }}
                </a>
            </div>
            <div class="category-container">
                @foreach ($major_category->categories as $middle_category)
                    <div class="category-box">
                        <div>
                            <img class="category-image" src="{{ asset($middle_category->image->url) }}">
                        </div>
                        <div class="middle-category-name">
                            <a href="{{ route('category', $middle_category->id) }}">
                                {{ $middle_category->category_name }}
                            </a>
                        </div>
                        <ul class="minor-category">
                            @foreach ($middle_category->categories as $minor_category)
                            <li class="minor-category-name">
                                <a href="{{ route('category', $minor_category->id) }}">
                                    {{ $minor_category->category_name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            @if (!$loop->last)
                <hr class="category-partition">
            @endif
        @endforeach
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/page_link.js') }}"></script>
@endsection
