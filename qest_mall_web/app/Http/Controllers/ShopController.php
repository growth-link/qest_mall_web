<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\DeliveryType;
use App\Models\Prefecture;
use App\Models\Shop;
use App\Models\ShopDeliveryArea;
use App\Models\ShopDeliveryCharge;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Tag;

class ShopController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 店舗情報
    |--------------------------------------------------------------------------
    */

    public function shopInfo(Shop $shop) {
        $shop_info = config('shop_info');
        return view('user.shop.pc.shop_info', compact(
            'shop',
            'shop_info',
        ));
    }

    public function spShopInfo(Shop $shop) {
        $shop_info = config('shop_info');
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        return view('user.shop.sp.shop_info', compact(
            'shop',
            'shop_info',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    /*
    |--------------------------------------------------------------------------
    | 配送・送料について
    |--------------------------------------------------------------------------
    */

    public function deliveryAndPostage(Shop $shop) {
        $shop_delivery_charges = ShopDeliveryCharge::where('shop_id', $shop->id)->get();
        $shop_delivery_areas = ShopDeliveryArea::all();
        $sizes = Size::all();
        $delivery_type_ids = $shop_delivery_charges->pluck('delivery_type_id')->unique()->toArray();
        $delivery_types = DeliveryType::whereIn('id', $delivery_type_ids)->get();

        return view('user.shop.pc.delivery_and_postage', compact(
            'shop',
            'shop_delivery_charges',
            'shop_delivery_areas',
            'sizes',
            'delivery_types',
        ));
    }

    public function spDeliveryAndPostage(Shop $shop) {
        $shop_delivery_charges = ShopDeliveryCharge::where('shop_id', $shop->id);
        $shop_delivery_areas = ShopDeliveryArea::all();
        $sizes = Size::all();
        $delivery_type_ids = $shop_delivery_charges->pluck('delivery_type_id')->unique()->toArray();
        $delivery_types = DeliveryType::whereIn('id', $delivery_type_ids)->get();
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.shop.sp.delivery_and_postage', compact(
            'shop',
            'shop_delivery_charges',
            'shop_delivery_areas',
            'sizes',
            'delivery_types',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    /*
    |--------------------------------------------------------------------------
    | 利用規約/個人情報保護方針
    |--------------------------------------------------------------------------
    */

    public function contract(Shop $shop) {
        $contract = config('contract');
        return view('user.shop.pc.contract', compact(
            'contract',
        ));
    }

    public function spContract(Shop $shop) {
        $contract = config('contract');
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.shop.sp.contract', compact(
            'contract',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }
}
