<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class AdminController extends Controller
{
    public function index() {
        return redirect()->route("admin.login");
    }

    /*
    |--------------------------------------------------------------------------
    | 管理画面選択
    |--------------------------------------------------------------------------
    */
    
    // 管理画面選択
    public function modeSelect(Request $request) {
        return view("admin/top/mode_select");
    }

    // ショップ選択
    public function shops(Request $request) {
        \FBAuth::checkAdminLogin($request);

        $shops = Shop::where("deleted_at", null)->get();
        $sort = null;
        $search = null;

        if($request->has('sort')) {
            $sort = $request->sort;
            $shops = Shop::where("deleted_at", null)->orderBy($sort)->get();
        }

        if($request->has('search')) {
            // キーワードのメタ文字をエスケープして商品名を検索
            $pat = '%' . addcslashes($request->search, '%_\\') . '%';
            $search = $request->search;
            $shops = Shop::where("deleted_at", null)->where("shop_name", 'LIKE', $pat)->get();
        }

        return view("admin/top/shops", [
            "shops" => $shops,
            "search" => $search,
            "sort" => $sort,
        ]);
    }
}
