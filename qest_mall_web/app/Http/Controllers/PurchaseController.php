<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\Notice;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Brand;
use App\Models\ItemImage;
use App\Models\Cart;
use Illuminate\Support\Facades\Log;

class PurchaseController extends Controller
{
    // カート
    public function cart() {
        $items = Item::latest()->take(30)->get(); // 新着商品取得
        $notices = Notice::all();
        $rank_items = Item::where('deleted_at', null)->take(10)->get();

        // TODO
        $shop_carts = ['c1'=>'red',
        ];
        $shop_carts = Cart::where("user_id", 1)->get();

        return view('user.purchase.pc.cart', compact(
            'items',
            'notices',
            'shop_carts',
            'rank_items'
        ));
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
