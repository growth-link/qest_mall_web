<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Shop;

class TopController extends Controller
{
    public function topMall(Request $request) {
        $request->session()->put('is_mall', true);
        return view("admin/top/mall_top");
    }

    public function topShop(Request $request) {

        $shop_id = $request->query('shop_id');
        \Log::Info("=====================================");
        \Log::Info("shop_id:".$shop_id);

        if($shop_id != null) {
            $shop = Shop::query()
                        ->where("id", $shop_id)
                        ->first();
            if($shop) {
                $request->session()->put('shop', $shop);
                $request->session()->put('is_mall', false);
            }
        }
    
        return view("admin/top/shop_top");
    }
}
