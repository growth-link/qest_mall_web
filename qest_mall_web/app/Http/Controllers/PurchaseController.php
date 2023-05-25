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
    public function cart(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        $shops = Shop::query()->get();
        if($request->has("shop_id")) {
            $shop = Shop::query()->where("shop_id", $request->shop_id)->first();
        }

        $cart_items = Cart::query()
            ->select(
                'items.*',
                'carts.shop_id',
                'carts.item_id',
                'carts.user_id',
                'carts.amount'
            )
            ->where('user_id', 1)
            ->leftJoin('items','items.id','=','carts.item_id')
            ->get();

        Log::Info("========================= カートアイテム");
        Log::Info($cart_items);

        $items = Item::latest()->take(30)->get(); // 新着商品取得
        $notices = Notice::all();
        $rank_items = Item::where('deleted_at', null)->take(10)->get();

        // // TODO
        // $shop_carts = ['c1'=>'red'];
        // $shop_carts = Cart::where("user_id", 1)->get();

        return view('user.purchase.pc.cart', compact(
            'is_login',
            'items',
            'notices',
            'cart_items',
            'shops',
            //'shop_carts',
            'rank_items'
        ));
    }

    // カート追加
    public function addCart(Request $request) {
        $user_id = 1;//$request->user_id;

        $cart = Cart::query()
                    ->where('shop_id', $request->shop_id)
                    ->where('user_id', $user_id)
                    ->where('item_id', $request->item_id)
                    ->first();

        if($cart) {
            $cart->amount = $cart->amount + 1;
            $cart->update();
        } else {
            Cart::create([
                "shop_id" => $request->shop_id,
                "user_id" => 1,
                "item_id" => $request->item_id,
                "amount" => 1
            ]);
        }

        return redirect()->route("cart");
    }

    public function spCart(Request $request) {
        return view('user/purchase.sp.cart');
    }

    // 購入前ログイン
    public function cartLogin(Request $request) {
        return view('user.purchase.pc.cart_login');
    }

    public function spCartLogin(Request $request) {
        return view('user.purchase.sp.cart_login');
    }

    // 購入手続き
    public function cartPurchase(Request $request) {
        return view('user.purchase.pc.cart_purchase');
    }

    public function spCartPurchase(Request $request) {
        return view('user.purchase.sp.cart_purchase');
    }
}
