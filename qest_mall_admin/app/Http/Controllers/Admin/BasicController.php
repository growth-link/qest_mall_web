<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

use App\Models\ProceedHistoriesHeader;
use App\Models\ProceedHistoriesDetail;
use App\Models\Mall;
use App\Models\ServiceInfo;

use League\Csv\Writer;


class BasicController extends Controller
{
    // 基本情報
    public function basicInfo(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        $mall = Mall::first();
        $service = ServiceInfo::first();

        return view("admin/basic/basic_info", compact(
            'mall',
            'service'
        ));
    }

    // OPA登録法人情報編集
    public function corporateInfoEdit(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        return view("admin/basic/corporate_info_edit",[]);
    }

    // 出典規約
    public function termsOpen(Request $request) {
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

