@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/item_search.css') }}">
{{-- Content Box --}}
<div class="content-box">
    <div style="margin-top:60px;display:flex;">
        @include('user.layouts.pc.item_sidemenu')

        {{-- Main Content --}}
        <div class="main-content">
            {{-- 商品画像 --}}
            <div class="main-carousel-slick">
                {{-- @foreach ($top_banners as $top_banner)
                    <div>
                        <a href="{{ $top_banner->url }}">
                            <img class="img" src="{{ $top_banner->image->url }}">
                        </a>
                    </div>
                @endforeach --}}
                <div>
                    <a href="#">
                        <img class="img" src="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/drop_down_menu.js') }}"></script>
    <script>
        function showModal() {
            $('.modal').modal({
                centered: false
            }).modal('show');
        }
        //クリックで動く
		$('.nav-open').click(function(){
			$(this).toggleClass('active');
			$(this).next('nav').slideToggle();
		});
    </script>
@endsection
