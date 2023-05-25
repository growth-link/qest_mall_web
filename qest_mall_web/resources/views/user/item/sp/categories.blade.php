@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/categories.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            {{ Breadcrumbs::render('sp.categories') }}

            <h2 class="section-title">カテゴリ一覧</h2>

            @foreach ($major_categories as $major_category)
                <div class="major-category-name" id="category{{ $major_category->id }}">
                    <a href="{{ route('sp.category', $major_category->id) }}">
                        {{ $major_category->category_name }}
                    </a>
                </div>
                <div class="category-container">
                    @foreach ($major_category->categories as $middle_category)
                        <a href="{{ route('sp.category', $middle_category->id) }}" class="category-box">
                            <div class="middle-category-image">
                                <img class="category-image" src="{{ asset($middle_category->image->url) }}">
                            </div>
                            <p class="middle-category-name">
                                {{ $middle_category->category_name }}
                            </p>
                        </a>
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
@endsection
