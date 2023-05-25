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
        <div class="main-content" style="margin-left:auto;">
            <h2 class="page-title">購入履歴</h2>

            <div class="main-content-box" style="padding:20px;height:350px;">
                <div style="width:70%;float:left;">
                    <div style="width:100%;height:160px;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/no_image_logo.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】天然水 ミネラルウォーター 500ml 1セット(6本) </div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div style="" class="price-text">送料 550円 <span style="font-size:20px;margin-left:20px;">2200円</span></div>
                        </div>
                    </div>

                    <div style="width:100%;">
                        <div style="float:left;width:25%;">
                            <img src="http://localhost:8001/images/item/item2.png" style="width:100%;">
                        </div>
                        <div style="float:left;width:70%;">
                            <div style="font-weight:bold;margin-left:10px;">【会計テスト用】繰り返し使える 3Dビューティマスク(ホワイト) 5枚</div>
                            <span style="margin-left:10px;color:#cccccc;">mil mil</span>
                            <div class="price-text">送料 550円 <span style="font-size:20px;margin-left:20px;">3240円</span></div>
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
                    color: #888888;margin-left:10px;margin-top:10px;"
                     onclick="location.href='{{ route("mypage.purchase_histories.detail", ["purchase_id" => 1]); }}'">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000001</div>
                    </div>
                </div>
            </div>



            <div class="main-content-box" style="padding:20px;height:350px;">
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
                    color: #888888;margin-left:10px;margin-top:10px;" 
                    onclick="location.href='{{ route("mypage.purchase_histories.detail", ["purchase_id" => 2]); }}'">注文詳細を表示</button>

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
                            <span style="margin-left:10px;color:#cccccc;">天のめぐみ</span>
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
                    color: #888888;margin-left:10px;margin-top:10px;" 
                    onclick="location.href='{{ route("mypage.purchase_histories.detail", ["purchase_id" => 3]); }}'">注文詳細を表示</button>

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
                    color: #888888;margin-left:10px;margin-top:10px;" 
                    onclick="location.href='{{ route("mypage.purchase_histories.detail", ["purchase_id" => 4]); }}'">注文詳細を表示</button>

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
                    color: #888888;margin-left:10px;margin-top:10px;" 
                    onclick="location.href='{{ route("mypage.purchase_histories.detail", ["purchase_id" => 5]); }}'">注文詳細を表示</button>

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
                    color: #888888;margin-left:10px;margin-top:10px;" 
                    onclick="location.href='{{ route("mypage.purchase_histories.detail", ["purchase_id" => 6]); }}'">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000008</div>
                    </div>
                </div>
            </div>



            <!-- 会計5 -->
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
                    color: #888888;margin-left:10px;margin-top:10px;" 
                    onclick="location.href='{{ route("mypage.purchase_histories.detail", ["purchase_id" => 6]); }}'">注文詳細を表示</button>

                    <div style="bottom:0px;margin-top:150px;">
                        <div style="margin-left:10px;color:#aaaaaa;">注文番号</div>
                        <div style="margin-left:10px;color:#aaaaaa;">1-2305-000000008</div>
                    </div>
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
