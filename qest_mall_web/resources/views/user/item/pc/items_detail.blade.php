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
                @foreach ($item_imgs as $item_img)
                    <div>
                        <img class="img" style="height:400px;width:400px;margin:0 auto;" src="{{ $item_img->image_url }}">
                    </div>
                @endforeach
            </div>

            

            <hr style="border:1px solid rgba(0,0,0,.87);">

            {{-- 利用可能なクーポン --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">この商品で利用可能なクーポン</h2>
                @foreach($coupons as $coupon)
                    <a href="{{ route('coupons', ['coupon' => 1]); }}">
                        <div style="width:100%;border-radius:10px;background-color:#F7F7F7;padding:10px;">
                            
                        </div>
                    </a>
                @endforeach
            </section>

            {{-- クーポン --}}
            <section class="main-content-box coupon">
                <div class="coupon-slick">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($coupons as $coupon)
                            <div>
                                <a href="{{ route('coupons', $coupon->id) }}">
                                    <img class="img" src="{{ asset($coupon->image->url) }}">
                                </a>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </section>

            {{-- バリエーションを選択して購入 --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">バリエーションを選択して購入</h2>
                @include('user.layouts.pc.components.item.rank_items')
            </section>

            {{-- この商品と一緒に購入されている商品 --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">この商品と一緒に購入されている商品</h2>
                @include('user.layouts.pc.components.item.rank_items')
            </section>

            {{-- この商品を購入している人が注目している商品 --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">この商品を購入している人が注目している商品</h2>
                @include('user.layouts.pc.components.item.rank_items')
            </section>


            <hr style="border:solid 0.3px #EBEBEB;margin:40px 15px;">

            <section class="shop-info">
                <div class="shop-info-top">
                    <div class="shop-banner">
                        @empty($shop->banner_url)
                            <img src="{{ asset('/images/shop/no_image_logo.png') }}">
                        @else
                            <img src="{{ asset($shop->banner_url) }}">
                        @endempty
                    </div>
                    <div class="shop-text">
                        <h2 class="section-title">
                            {{ $shop->shop_name }}
                            <button class="inquiry_btn_radius">ショップに問い合わせる</button>
                        </h2>
                        <div class="flex-box">
                            <label class="ECM_CheckboxInput">
                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                <span class="ECM_CheckboxInput-LabelText">メールマガジンに登録する</span>
                            </label>
                        </div>
                        <div class="flex-box">
                            <label class="ECM_CheckboxInput">
                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                <span class="ECM_CheckboxInput-LabelText">お気に入りショップに登録する</span>
                            </label>
                        </div>
                        <ul class="shop-info-link">
                            <li><a href="{{ route('shop_info', $shop) }}">店舗情報</a></li>
                            <li><a>返品特約について</a></li>
                            <li><a>特商法に基づく表示</a></li>
                            <li><a>配送方法について</a></li>
                        </ul>
                    </div>
                </div>
                <div class="shop-info-bottom">
                    <p>{{ $shop->introduction }}</p>
                </div>
            </section>
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
