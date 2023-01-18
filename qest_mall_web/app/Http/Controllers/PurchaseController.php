<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    // カート
    public function cart () {
        return view('user.purchase.pc.cart');
    }

    public function spCart() {
        return view('user/purchase.sp.cart');
    }

    // 購入前ログイン
    public function cartLogin() {
        return view('user.purchase.pc.cart_login');
    }

    public function spCartLogin() {
        return view('user.purchase.sp.cart_login');
    }

    // 購入手続き
    public function cartPurchase() {
        return view('user.purchase.pc.cart_purchase');
    }

    public function spCartPurchase() {
        return view('user.purchase.sp.cart_purchase');
    }
}
