@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/faq.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            {{ Breadcrumbs::render('sp.faq') }}

            <h2 class="section-title">カート</h2>
        </div>
    </div>
    @component('user.layouts.sp.footer')
    @endcomponent
    {{-- @include('user.layouts.sp.menu') --}}
</div>
@endsection
@section("script")
    <script src="{{ asset('/js/sp/accordion.js') }}"></script>
    <script src="{{ asset('/js/sp/faq.js') }}"></script>
@endsection
