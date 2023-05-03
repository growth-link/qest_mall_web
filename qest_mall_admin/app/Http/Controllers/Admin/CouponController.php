<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    public function coupons(Request $request) {
        // $items = $query->latest()->paginate(60);
        // $rank_items = $items->take(10);
        $items = Item::latest()->take(30)->get(); // 新着商品取得

        $shops = Shop::orderBy('shop_name')->get();

        return view("admin/sale-mng/coupons", compact(
            'items',
            'shops'
        ));
    }

    public function spCoupons(Request $request) {
        $items = $query->latest()->paginate(60);
        $rank_items = $items->take(10);

        $shops = Shop::get();

        return view("admin/sale-mng/coupons", compact(
            'items',
            'rank_items',
            'shops'
        ));
    }

    
    public function entryShops(Request $request) {
        return view("admin/sale-mng/entry-shops");
    }
    
    public function entryItems(Request $request) {
        return view("admin/sale-mng/entry-items");
    }
    
    public function createCoupon(Request $request) {
        return view("admin/sale-mng/coupons/create");
    }
    
    public function createLp(Request $request) {


        return view("admin/sale-mng/coupon-lps/create",compact(

        ));
    }
    
    public function previewLp(Request $request) {
        return view("admin/sale-mng/coupon-lps/preview");
    }
    
    public function couponDetail(Request $request) {
        return view("admin/sale-mng/coupons/detail");
    }
    
    public function editCoupon(Request $request) {
        return view("admin/sale-mng/coupons/edit");
    }
    
    public function editCouponItems(Request $request) {
        return view("admin/sale-mng/coupons/items");
    }
}
