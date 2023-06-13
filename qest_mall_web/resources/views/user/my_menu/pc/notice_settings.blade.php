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
        <div class="main-content" style="margin-left:auto;">
            <h2 class="page-title">通知設定</h2>

            <div class="main-content-box">
                受信する
                <!-- トグルスイッチ -->
                <div class="toggle_switch">
                    <input type="checkbox" name="xxx" id="cb_toggle_switch">
                    <label for="cb_toggle_switch"></label>
                </div>
            </div>
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/modal.js') }}"></script>
@endsection
