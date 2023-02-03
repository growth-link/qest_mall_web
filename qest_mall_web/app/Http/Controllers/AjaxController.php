<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Brand;

class AjaxController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ショップ・ブランド一覧取得
    |--------------------------------------------------------------------------
    */
    public function shopBrandName() {
        $name_list = [];
        $name_list['shop'] = Shop::select('shop_name')->get();
        $name_list['brand'] = Brand::select('brand_name')->get();
        return response()->json($name_list);
    }
}
