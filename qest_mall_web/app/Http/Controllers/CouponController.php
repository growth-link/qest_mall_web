<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Brand;
use App\Models\ItemImage;
use Illuminate\Support\Facades\Log;

class CouponController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | クーポンLP
    |--------------------------------------------------------------------------
    */
    public function coupons(Coupon $coupon) {

        $items = Item::latest()->take(30)->get(); // 対象商品

        $shops = Shop::orderBy('shop_name')->get();

        return view('user.coupon.pc.coupons', compact(
            'items',
            'coupon',
            'shops'
        ));
    }
    public function spCoupons(Coupon $coupon) {
        return view('user.coupon.sp.coupons', compact('coupon'));
    }
}
