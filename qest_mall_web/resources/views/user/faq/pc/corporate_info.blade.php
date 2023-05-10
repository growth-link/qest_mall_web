@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/faq.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('faq') }}

        {{-- Main Content --}}
        <div class="main-content">
            <h2 class="faq-title">よくあるご質問（FAQ）</h2>
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/accordion.js') }}"></script>
    <script src="{{ asset('/js/pc/faq.js') }}"></script>
@endsection
