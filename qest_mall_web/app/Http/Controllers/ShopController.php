<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 店舗情報
    |--------------------------------------------------------------------------
    */

    public function shopInfo() {
        return view('user/shop/shop_info');
    }

    public function spShopInfo() {
        return view('user/shop/shop_info_sp');
    }

    /*
    |--------------------------------------------------------------------------
    | 配送・送料について
    |--------------------------------------------------------------------------
    */

    public function deliveryAndPostage() {
        return view('user/shop/delivery_and_postage');
    }

    public function spDeliveryAndPostage() {
        return view('user/shop/delivery_and_postage_sp');
    }
}
