@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/my_menu.css') }}">
{{-- Content Box --}}
<div class="content-box">
    <div style="display:flex;">
        @include('user.layouts.pc.mymenu_sidemenu',['menu_type' => $menu_type])

        {{-- Main Content --}}
        <div class="main-content">
            <h2 class="page-title">お気に入り編集</h2>

            {{-- 新着商品 --}}
            <section class="latest-item">
                <div class="item-container">
                    @include('user.layouts.pc.components.item.items')
                </div>
            </section>
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/modal.js') }}"></script>
@endsection
