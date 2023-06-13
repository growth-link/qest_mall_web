@extends("layout")
@section('content')
@if($is_login)
    @component('user.layouts.pc.header')
    @endcomponent
@else
    @component('user.layouts.pc.guest_header')
    @endcomponent
@endif
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/my_menu.css') }}">
{{-- Content Box --}}
<div class="content-box">
    <div style="display:flex;">
        @include('user.layouts.pc.mymenu_sidemenu',['menu_type' => $menu_type])

        {{-- Main Content --}}
        <div class="main-content" style="margin-left:auto;min-height:500px;">
            <h2 class="page-title">保有クーポン一覧</h2>

            @foreach($coupons as $coupon)
                <div style="
                    border: 1px solid #EBEBEB;
                    border-radius: 5px;
                    height: 200px;
                    margin-bottom: 40px;
                    padding:20px;
                ">
                    <div style="font-weight:bold;">test</div>
                    <div style="color:#cccccc;">test1</div>
                    <div style="width:100%;height:20px;">発送予定：注文確定からtest営業日以内</div><!-- LTODO -->
                    <div style="color:#cccccc;height:20px;">カラー：test</div>
                    <div style="color:#cccccc;heiht:20px;">サイズ：test</div>
                    <div style="float:left;width:70%;">
                </div>
            @endforeach
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/modal.js') }}"></script>
@endsection
