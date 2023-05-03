<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

use App\Models\ProceedHistoriesHeader;
use App\Models\ProceedHistoriesDetail;

use League\Csv\Writer;


class BasicController extends Controller
{
    // 基本情報
    public function basicInfo(Request $request) {
        return view("admin/basic/basic_info", []);
    }

    // 出典規約
    public function termsOpen(Request $request) {
        return view("admin/basic/terms_open", []);
    }

    // 利用規約/個人情報保護方針
    public function termsService(Request $request) {
        return view("admin/basic/terms_service", []);
    }

    // 管理ユーザー
    public function adminUsers(Request $request) {
        return view("admin/basic/admin_users", []);
    }

    // スタッフマスタ
    public function staff(Request $request) {
        return view("admin/basic/staff", []);
    }

    // トップバナー編集
    public function topBanners(Request $request) {
        return view("admin/basic/topBanners", []);
    }

    // 広告バナー編集
    public function adBanners(Request $request) {
        return view("admin/basic/adBanners", []);
    }
}

