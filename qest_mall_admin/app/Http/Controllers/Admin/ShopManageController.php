<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

use App\Models\ProceedHistoriesHeader;
use App\Models\ProceedHistoriesDetail;

use League\Csv\Writer;


class ShopManageController extends Controller
{
    // 契約情報
    public function contract(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }



        return view("admin/basic/terms_of_open", compact(
            'is_login'
        ));
    }

    // 基本情報
    public function shopInfo(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        $shop_basic = Shop::query()->where("shop_id", $request->shop_id)->first();
        $info = MngInfo::query()->where("shop_id", $request->shop_id)->first();

        return view("admin/basic/basic-mng/basic_info", [
            'is_login',
            'shop_basic',
            'info'
        ]);
    }

    

    // 利用規約/個人情報保護方針
    public function termsService(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        return view("admin/basic/terms_of_service", []);
    }

    // 管理ユーザー
    public function adminUsers(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        return view("admin/basic/admin_users", []);
    }

    // スタッフマスタ
    public function staff(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        return view("admin/basic/staff", []);
    }

    // トップバナー編集
    public function topBanners(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        return view("admin/basic/top_banners", []);
    }

    // 広告バナー編集
    public function adBanners(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        return view("admin/basic/ad_banners", []);
    }
}

