@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{-- Main Content --}}
    <div class="main-content">
        <div class="main-content-box" style="height:400px;">
            退会が完了しました。
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/modal.js') }}"></script>
@endsection
