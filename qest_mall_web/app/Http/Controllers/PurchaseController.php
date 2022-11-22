<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    // カート
    public function cart () {
        return view('user/purchase/cart');
    }

    public function spCart() {
        return view('user/purchase/sp_cart');
    }

    // 購入前ログイン
    public function cartLogin() {
        return view('user/purchase/cart_login');
    }

    public function spCartLogin() {
        return view('user/purchase/sp_cart_login');
    }

    // 購入手続き
    public function cartPurchase() {
        return view('user/purchase/cart_purchase');
    }

    public function spCartPurchase() {
        return view('user/purchase/cart_purchase_sp');
    }
}
