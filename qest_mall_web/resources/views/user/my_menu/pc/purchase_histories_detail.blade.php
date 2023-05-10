@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/my_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/common.css') }}">
{{-- Content Box --}}
<div class="content-box">
    <div style="display:flex;">
        @include('user.layouts.pc.mymenu_sidemenu',['menu_type' => $menu_type])
        {{-- Main Content --}}
        <div style="margin-left:30%;width:50%;float:left;">
            <h2 class="page-title">注文詳細</h2>

            {{-- <div style="padding:20px;height:350px;">
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
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;right:20px;">送料 550円 <span style="font-size:20px;margin-left:20px;">2200</span><span style="font-size:12px;margin-left:5px;">円（税込）</span></div>
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
            </div> --}}

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
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;right:20px;">送料 550円 <span style="font-size:20px;margin-left:20px;">2200</span><span style="font-size:12px;margin-left:5px;">円（税込）</span></div>
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
{{-- 
            <div  style="padding:20px;height:350px;">
            </div> --}}


            {{-- <div class="main-content-box" style="padding:20px;height:350px;">
                <div style="width:70%;float:left;">
                    <div style="width:100%;height:160px;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/item3.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】LS-5100WH(ホワイト) マイナスイオンドライヤー</div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 2200円 <span style="font-size:20px;margin-left:20px;">5500円</span></div>
                        </div>
                    </div>
                </div>

                <!-- 会計情報 -->
                <div style="width:1px;background-color:#cccccc;height:300px;float:left;"></div>
                <div style="width:28%;float:left;">
                    <div style="margin-left:10px;color:#aaaaaa;">購入日</div>
                    <div style="margin-left:10px;color:#aaaaaa;">2023年5月6日</div>

                    <button style="padding: 10px 30px;
                    border: 0px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: bold;
                    background-color: #dddddd;
                    color: #888888;margin-left:10px;margin-top:10px;">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000002</div>
                    </div>
                </div>
            </div>


            <div class="main-content-box" style="padding:20px;height:350px;">
                <div style="width:70%;float:left;">
                    <div style="width:100%;height:160px;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/no_image_logo.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】天然水 ミネラルウォーター 500ml 1セット(6本) </div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 650円 <span style="font-size:20px;margin-left:20px;">4400円</span></div>
                        </div>
                    </div>
                </div>

                <!-- 会計情報 -->
                <div style="width:1px;background-color:#cccccc;height:300px;float:left;"></div>
                <div style="width:28%;float:left;">
                    <div style="margin-left:10px;color:#aaaaaa;">購入日</div>
                    <div style="margin-left:10px;color:#aaaaaa;">2023年5月6日</div>

                    <button style="padding: 10px 30px;
                    border: 0px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: bold;
                    background-color: #dddddd;
                    color: #888888;margin-left:10px;margin-top:10px;">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000003</div>
                    </div>
                </div>
            </div>

            <div class="main-content-box" style="padding:20px;height:350px;">
                <div style="width:70%;float:left;">
                    <div style="width:100%;height:160px;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/no_image_logo.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】天然水 ミネラルウォーター 500ml 1セット(6本) </div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 550円 <span style="font-size:20px;margin-left:20px;">2200円</span></div>
                        </div>
                    </div>

                    <div style="width:100%;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/item2.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】繰り返し使える 3Dビューティマスク(ホワイト) 5枚</div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 550円 <span style="font-size:20px;margin-left:20px;">3240円</span></div>
                        </div>
                    </div>
                </div>

                <!-- 会計情報 -->
                <div style="width:1px;background-color:#cccccc;height:300px;float:left;"></div>
                <div style="width:28%;float:left;">
                    <div style="margin-left:10px;color:#aaaaaa;">購入日</div>
                    <div style="margin-left:10px;color:#aaaaaa;">2023年5月6日</div>

                    <button style="padding: 10px 30px;
                    border: 0px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: bold;
                    background-color: #dddddd;
                    color: #888888;margin-left:10px;margin-top:10px;">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000004</div>
                    </div>
                </div>
            </div>

            <div class="main-content-box" style="padding:20px;height:350px;">
                <div style="width:70%;float:left;">
                    <div style="width:100%;height:160px;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/no_image_logo.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】天然水 ミネラルウォーター 500ml 1セット(6本) </div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 550円 <span style="font-size:20px;margin-left:20px;">2200円</span></div>
                        </div>
                    </div>

                    <div style="width:100%;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/item2.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】繰り返し使える 3Dビューティマスク(ホワイト) 5枚</div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 550円 <span style="font-size:20px;margin-left:20px;">3300円</span></div>
                        </div>
                    </div>
                </div>

                <!-- 会計情報 -->
                <div style="width:1px;background-color:#cccccc;height:300px;float:left;"></div>
                <div style="width:28%;float:left;">
                    <div style="margin-left:10px;color:#aaaaaa;">購入日</div>
                    <div style="margin-left:10px;color:#aaaaaa;">2023年5月6日</div>

                    <button style="padding: 10px 30px;
                    border: 0px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: bold;
                    background-color: #dddddd;
                    color: #888888;margin-left:10px;margin-top:10px;">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000007</div>
                    </div>
                </div>
            </div>

            <div class="main-content-box" style="padding:20px;height:350px;">
                <div style="width:70%;float:left;">
                    <div style="width:100%;height:160px;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/no_image_logo.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】天然水 ミネラルウォーター 500ml 1セット(6本) </div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="font-weight:bold;margin-left:10px;font-size:17px;text-align:right;">送料 550円 <span style="font-size:20px;margin-left:20px;">2200円</span></div>
                        </div>
                    </div>
                </div>

                <!-- 会計情報 -->
                <div style="width:1px;background-color:#cccccc;height:300px;float:left;"></div>
                <div style="width:28%;float:left;">
                    <div style="margin-left:10px;color:#aaaaaa;">購入日</div>
                    <div style="margin-left:10px;color:#aaaaaa;">2023年5月6日</div>

                    <button style="padding: 10px 30px;
                    border: 0px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: bold;
                    background-color: #dddddd;
                    color: #888888;margin-left:10px;margin-top:10px;">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000008</div>
                    </div>
                </div>
            </div> --}}

            <div style="width:100%;height:80px;">
                <div style="width:48%;float:left;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">発送状況</span>
                    <hr>
                </div>
                <div style="width:48%;float:left;margin-left:2%;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">配送情報</span>
                    <hr>
                </div>
            </div>

            <div style="width:100%;margin-top:50px;">
                <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">請求先情報</span>
                <div style="width:100%;height:100px;background-color:#dddddd;"></div>
            </div>

            <div style="width:100%;margin-top:20px;">
                <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">お届け先情報</span>
                <div style="width:100%;height:100px;background-color:#dddddd;"></div>
            </div>

            <div style="width:100%;margin-top:20px;">
                <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">お支払い情報</span>
                <div style="width:100%;height:100px;background-color:#dddddd;"></div>
            </div>

            <div style="width:100%;margin-top:20px;">
                <div style="width:48%;float:left;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">WAONポイント利用金額</span>

                </div>
                <div style="width:48%;float:left;margin-left:2%;">
                    <span style="font-weight:bold;color:#aaaaaa;font-size:20px;">クーポン利用</span>

                </div>
            </div>
        </div>

        {{-- Right sMenu --}}
        <div style="position:fixed;width:20%;border:1px solid gray;right:8%;top:110px;border: 1px solid #EBEBEB;padding:20px;">
            
            <div style="font-weight:bold;margin-bottom:10px;">購入日：2023年5月7日</div>

            <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                <div style="float:left;">商品小計</div>
                <div style="float:right;">5440円</div>
            </div>
            <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                <div style="float:left;">オプション</div>
                <div style="float:right;">1,100円</div>
            </div>
            <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                <div style="float:left;">送料</div>
                <div style="float:right;">1,100円</div>
            </div>
            {{-- <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                <div style="float:left;">割引クーポン利用</div>
                <div style="float:right;">-800円</div>
            </div> --}}
            <div style="width:100%;height:20px;color:gray;margin-top:10px;">
                <div style="float:left;">WAONポイント利用</div>
                <div style="float:right;">-500円</div>
            </div>
            
            <div style="width:100%;height:20px;font-weight:bold;margin-top:20px;">
                <div style="float:left;">お支払い金額</div>
                <div style="float:right;">7,140円</div>
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
