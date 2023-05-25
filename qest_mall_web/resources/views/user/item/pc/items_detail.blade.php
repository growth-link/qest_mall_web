@extends("layout")
@section('content')
@if($is_login)
    @component('user.layouts.pc.header')
    @endcomponent
@else
    @component('user.layouts.pc.guest_header')
    @endcomponent
@endif
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/item_search.css') }}">
<style>

</style>
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

            <div style="width:100%;height:200px;">
                <div style="float:left;width:30%;">
                    <div style="font-weight:bold;font-size:17px;">{{$item->name ?? ""}}</div>
                    <div style="font-weight:bold;font-size:17px;margin-top:10px;">{{$item->normal_price ?? ""}}円（税込）</div>
                    <div style="font-weight:bold;font-size:12px;margin-top:10px;">納期目安:2日~14日</div>
                    <div style="font-weight:bold;font-size:12px;margin-top:10px;">納期目安:2日~14日</div>
                </div>
                <div style="float:left;width:70%;text-align:right;">
                    <div style="width:100%;height:100px;"></div>
                    <form action="{{ route('addCart') }}" method="post" style="float:left;">
                        @csrf
                        <input id="item_id" type="hidden" name="item_id" value="{{ $item->id }}">
                        <input id="shop_id" type="hidden" name="shop_id" value="{{ $item->shop_id }}">
                        <input id="" type="hidden" name="">
                        <button class="primary_radius_button" style="padding: 15px 30px;
                            border: 0px;
                            border-radius: 30px;
                            font-size: 17px;
                            font-weight: bold;
                            background-color: #FBDB5B;">カートに追加する</button>
                    </form>
                    <button class="primary_btn_radius_menu" style="padding: 15px 30px;
                        margin-left:10px;
                        border: 0px;
                        border-radius: 30px;
                        font-size: 17px;
                        font-weight: bold;
                        background-color: #FBDB5B;" onclick="purchaseTb01Hr9Rebkw6();">商品を購入する</button>
                </div>
            </div>

            <hr style="border:1px solid #CECECE;">

            <div style="font-weight:bold;font-size:12px;margin:20px 0px;">
                {{$item->detail_title ?? ""}}
            </div>

            {{-- 商品詳細 --}}
            <section class="main-content-box rank-item" style="min-height:100px;">
                <div style="width:100%;min-height:50px;border-radius:10px;background-color:#F7F7F7;padding:20px;">
                    {{$item->detail ?? ""}}
                </div>
            </section>

            {{-- 商品情報 --}}
            <section class="main-content-box rank-item" style="min-height:100px;">
                <h2 class="section-title">商品情報</h2>
                    <div style="width:100%;min-height:50px;border-radius:10px;background-color:#F7F7F7;padding:10px;">
                        
                    </div>
            </section>

            {{-- 利用可能なクーポン --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">この商品で利用可能なクーポン</h2>
                @if($coupons)
                    @foreach($coupons as $coupon)
                        <a href="{{ route('coupons', ['coupon' => 1]); }}">
                            <div style="width:100%;border-radius:10px;background-color:#F7F7F7;padding:10px;">
                                
                            </div>
                        </a>
                    @endforeach
                @else

                @endif
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
