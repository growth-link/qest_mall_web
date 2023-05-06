@extends("layout")
@component('user.layouts.pc.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/item_search.css') }}">
@section('content')
    <div class="content-box">
        <div class="wrap" style="font-size:20px;">
            <ul>
                <li class="cls1">
                    <div style="font-weight:bold;height:50px;border-radius:5px;background-color:#F8D85B;padding:15px 20px;font-size:14px;color:#5c5c5c;">
                        カート
                    </div>
                </li>
                <li class="cls1">
                    <img src="/images/purchase/icon_triangle.png" style="margin-top:15px;">
                </li>
                <li class="cls1">
                    <div style="font-weight:bold;height:50px;border-radius:5px;background-color:#F7F7F7;padding:15px 20px;font-size:14px;color:#5c5c5c;">
                        ログイン
                    </div>
                </li>
                <li class="cls1">
                    <img src="/images/purchase/icon_triangle.png" style="margin-top:15px;">
                </li>
                <li class="cls1">
                    <div style="font-weight:bold;height:50px;border-radius:5px;background-color:#F7F7F7;padding:5px 20px;font-size:14px;color:#5c5c5c;">
                        お支払い<br>
                        配送方法
                    </div>
                </li>
                <li class="cls1">
                    <img src="/images/purchase/icon_triangle.png" style="margin-top:15px;">
                </li>
                <li class="cls1">
                    <div style="font-weight:bold;height:50px;border-radius:5px;background-color:#F7F7F7;padding:15px 20px;font-size:14px;color:#5c5c5c;">
                        注文確定
                    </div>
                </li>
            </ul>
        </div>

        @if($shop_carts->isNotEmpty())
            <h2 class="section-title">カートには以下の商品が入っています</h2>

            @foreach($shop_carts as $shop_cart)
            <div style="width:100%;min-height:150px;padding:10px;margin-top:20px;border:1px solid #CECECE" class="text" onclick="location.href='/login'">
                <h2 class="section-title">テストクエストモール店</h2>
                
                <hr style="border:solid 0.3px #EBEBEB;margin:40px 15px;">

                <div style="display:flex;">
                    <div style="width:70%;">
                    </div>
                    <div style="width:30%;">
                    </div>
                </div>

                {{-- セット購入されている商品 --}}
                <section class="main-content-box rank-item" style="width:90%;margin:0 auto;">
                    <h2 class="section-title">セット購入されている商品</h2>
                    @include('user.layouts.pc.components.item.rank_items')
                </section>
            </div>
            @endforeach
        @else
            <h2 class="section-title">カートには商品が入っていません</h2>

            <div style="width:100%;min-height:300px;padding:10px;margin-top:20px;border:1px solid #CECECE" class="text" onclick="location.href='/login'">
            </div>
        @endif
    </div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection

