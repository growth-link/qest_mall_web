@extends("layout")
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

        @if($cart_items->isNotEmpty())
            <h2 class="section-title">カートには以下の商品が入っています</h2>

            @foreach($shops as $shop)
                @foreach($cart_items as $item)
                    @if($shop->id == $item->shop_id)
                        <div style="width:100%;min-height:150px;padding:10px;margin-top:20px;border:1px solid #CECECE" class="text" onclick="location.href='/login'">
                            <h2 class="section-title">{{ $shop->shop_name }}</h2>
                            
                            <hr style="border:solid 0.3px #EBEBEB;margin:40px 15px;">

                            <div style="width:100%;min-height:250px;">
                                <div style="width:70%;float:left;">
                                    @if($item->amount != 0)
                                    <div style="width:100%;height:160px;">
                                        <div style="float:left;width:25%;">
                                            <img src="" style="width:100%;">
                                        </div>
                                        <div style="float:left;width:70%;margin-left:5%;">
                                            <div style="font-weight:bold;">{{$item->name}}</div>
                                            <div style="color:#cccccc;">{{$shop->shop_name}}</div>
                                            <div style="width:100%;height:20px;">発送予定：注文確定から{{$shop->id}}営業日以内</div><!-- LTODO -->
                                            <div style="color:#cccccc;height:20px;">カラー：{{$item->has_color ?? ""}}</div>
                                            <div style="color:#cccccc;heiht:20px;">サイズ：{{$item->has_size ?? ""}}</div>
                                            <div style="float:left;width:70%;">
                                                <span style="font-weight:bold;">数量</span>
                                                <input type="number" style="width:50px;height:40px;border:1px solid #CECECE;margin-left:20px;text-align:right;" value="{{ $item->amount ?? 0 }}">
                                                <span>個</span>
                                                <span style="margin: 0px 2px;">|</span>
                                                <a href="">削除</a>
                                            </div>
                                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;right:20px;">送料 円 <span style="font-size:20px;margin-left:20px;"></span><span style="font-size:12px;margin-left:5px;">{{ $item->normal_price }}円（税込）</span></div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div style="float:left;width:20%;border:1px solid gray;right:8%;top:110px;border: 1px solid #EBEBEB;padding:20px;">
            
                                    <div style="font-weight:bold;margin-bottom:10px;">購入日：</div>
                        
                                    <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                                        <div style="float:left;">商品小計</div>
                                        <div style="float:right;"></div>
                                    </div>
                                    <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                                        <div style="float:left;">オプション</div>
                                        <div style="float:right;"></div>
                                    </div>
                                    <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                                        <div style="float:left;">送料</div>
                                        <div style="float:right;"></div>
                                    </div>
                                    <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                                        <div style="float:left;">WAONポイント利用</div>
                                        <div style="float:right;"></div>
                                    </div>
                                    
                                    <div style="width:100%;height:20px;font-weight:bold;margin-top:20px;">
                                        <div style="float:left;">お支払い金額</div>
                                        <div style="float:right;"></div>
                                    </div>
                        
                        
                                    <div style="width:100%;height:20px;color:gray;margin-top:30px;">
                                        <a href="" style="font-size:12px;">※離島及び一部地域の送料について</a>
                                    </div>
                        
                                    <button class="primary_radius_button" style="padding: 10px 20px;
                                                border: 0px;
                                                border-radius: 30px;
                                                font-size: 14px;
                                                font-weight: bold;
                                                width:180px;
                                                background-color: #FBDB5B;">購入手続きに進む</button>
                    
                                </div>
                            </div>

                            
                            {{-- セット購入されている商品 --}}
                            <section class="main-content-box rank-item" style="width:90%;margin:0 auto;">
                                <h2 class="section-title">セット購入されている商品</h2>
                                @include('user.layouts.pc.components.item.rank_items')
                            </section>
                        </div>
                    @endif
                @endforeach
            @endforeach
        @else
            <h2 class="section-title" style="margin-top:120px;margin-bottom:190px;text-align:center;">カートには商品が入っていません</h2>
        @endif
    </div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection

