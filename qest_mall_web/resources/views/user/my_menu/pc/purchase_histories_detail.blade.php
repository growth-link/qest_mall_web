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
<link rel="stylesheet" href="{{ asset('css/pc/common.css') }}">
{{-- Content Box --}}
<style>
    .price-text {
        font-weight:bold;
        margin-left:10px;
        margin-top:20px;
        font-size:17px;
        text-align:right;
        color:rgb(216, 45, 45);
    }
</style>
<div class="content-box">
    <div style="display:flex;">
        @include('user.layouts.pc.mymenu_sidemenu',['menu_type' => $menu_type])
        {{-- Main Content --}}
        <div style="margin-left:30%;width:50%;float:left;">
            <h2 class="page-title">注文詳細</h2>

            @if($purchase_id == 1)
                <div style="padding:20px;height:350px;">
                    <div style="width:100%;float:left;">
                        <div style="width:100%;height:160px;">
                            <div style="float:left;width:25%;">
                                <img src="http://localhost:8001/images/item/no_image_logo.png" style="width:100%;">
                            </div>
                            <div style="float:left;width:70%;margin-left:5%;">
                                <div style="font-weight:bold;margin-left:10px;">【会計テスト用】天然水 ミネラルウォーター 500ml 1セット(6本) </div>
                                <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                                <div style="width:100%;height:10px;"></div>
                                <button class="primary_radius_button" style="padding: 10px 20px;
                                    border: 0px;
                                    border-radius: 30px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    width:180px;
                                    background-color: #FBDB5B;">もう一度購入する</button>
                                <div class="price-text">送料 550円 <span style="font-size:20px;margin-left:20px;">2200</span><span style="font-size:12px;margin-left:5px;">円（税込）</span></div>
                            </div>
                        </div>

                        <div style="width:100%;">
                            <div style="float:left;width:25%;">
                                <img src="http://localhost:8001/images/item/item2.png" style="width:100%;">
                            </div>
                            <div style="float:left;width:70%;margin-left:5%;">
                                <div style="font-weight:bold;margin-left:10px;">【会計テスト用】繰り返し使える 3Dビューティマスク(ホワイト) 5枚</div>
                                <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                                <div style="width:100%;height:10px;"></div>
                                <button class="primary_radius_button" style="padding: 10px 20px;
                                    border: 0px;
                                    border-radius: 30px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    width:180px;
                                    background-color: #FBDB5B;">もう一度購入する</button>
                                <div class="price-text">3240</span><span style="font-size:12px;margin-left:5px;">円（税込）</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($purchase_id == 2)
            <div style="padding:20px;height:350px;">
                <div style="width:100%;float:left;">
                    <div style="width:100%;height:160px;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/no_image_logo.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;margin-left:5%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】LS-5100WH(ホワイト) マイナスイオンドライヤー </div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="width:100%;height:10px;"></div>
                            <button class="primary_radius_button" style="padding: 10px 20px;
                                border: 0px;
                                border-radius: 30px;
                                font-size: 14px;
                                font-weight: bold;
                                width:180px;
                                background-color: #FBDB5B;">もう一度購入する</button>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;right:20px;">送料 2000円 <span style="font-size:20px;margin-left:20px;">5500</span><span style="font-size:12px;margin-left:5px;">円（税込）</span></div>
                        </div>
                    </div>

                    <div style="width:100%;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/item2.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;margin-left:5%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】繰り返し使える 3Dビューティマスク(ホワイト) 5枚</div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="width:100%;height:10px;"></div>
                            <button class="primary_radius_button" style="padding: 10px 20px;
                                border: 0px;
                                border-radius: 30px;
                                font-size: 14px;
                                font-weight: bold;
                                width:180px;
                                background-color: #FBDB5B;">もう一度購入する</button>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 550円 <span style="font-size:20px;margin-left:20px;">3240</span><span style="font-size:12px;margin-left:5px;">円（税込）</span></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            
            <div style="width:100%;height:80px;">
                <div style="width:48%;float:left;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">発送状況</span>
                    <hr>
                    <span style="font-weight:bold;color:#aaaaaa;font-size:18px;">発送済</span>
                </div>
                <div style="width:48%;float:left;margin-left:2%;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">配送情報</span>
                    <hr>
                    <span style="font-weight:bold;color:#aaaaaa;font-size:18px;">ヤマト宅配便</span>
                </div>
            </div>

            <div style="width:100%;margin-top:50px;">
                <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">請求先情報</span>
                <div style="width:100%;height:100px;background-color:#dddddd;padding:10px;color:#333333;">
                    ご請求先　135-0004 東京都江東区森下2-3-3
                    <br>田中太郎
                </div>
            </div>

            <div style="width:100%;margin-top:20px;">
                <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">お届け先情報</span>
                <div style="width:100%;height:100px;background-color:#dddddd;padding:10px;color:#333333;">
                    お届け先　135-0004 東京都江東区森下2-3-3
                    <br>田中太郎
                </div>
            </div>

            <div style="width:100%;margin-top:20px;">
                <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">お支払い情報</span>
                <div style="width:100%;height:100px;background-color:#dddddd;padding:10px;color:#333333;">
                    クレジットカード1　　　********4444
                    <br>個人用
                </div>
            </div>

            <div style="width:100%;margin-top:20px;">
                <div style="width:48%;float:left;text-align:right;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">WAONポイント利用金額</span>
                    <div style="width:100%;text-align:right;margin-top:10px;">500</div>
                </div>
                <div style="width:48%;float:left;margin-left:2%;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">クーポン利用</span>
                    <div style="width:100%;text-align:right;margin-top:10px;">1000円クーポン</div>
                </div>
            </div>
        </div>

        {{-- Right sMenu --}}
        <div style="position:fixed;width:20%;border:1px solid gray;right:8%;top:110px;border: 1px solid #EBEBEB;padding:20px;">
            
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

            <button class="primary_radius_button" style="padding: 15px 30px;
                    border: 0px;
                    border-radius: 30px;
                    font-size: 14px;
                    font-weight: bold;
                    width:90%;
                    background-color: #EBEBEB;
                    margin-top:50px;
                    margin-left:10%;
                    ">返品申請</button>

            <button class="primary_radius_button" style="padding: 15px 30px;
            border: 0px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
            width:90%;
            margin-top:20px;
                    margin-left:10%;
            background-color: #EBEBEB;" onclick="location.href='/pdf/statement'">ご利用明細を表示する</button>

            <button class="primary_radius_button" style="padding: 15px 30px;
            border: 0px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
            width:90%;
            margin-top:20px;
            margin-left:10%;
            background-color: #EBEBEB;" onclick="location.href='mailto::shop@qest-mall.jp'">ショップに問い合わせる</button>
        </div>

    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/modal.js') }}"></script>
@endsection
