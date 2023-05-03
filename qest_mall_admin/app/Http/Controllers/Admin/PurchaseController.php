<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

use App\Models\ProceedHistoriesHeader;
use App\Models\ProceedHistoriesDetail;

use League\Csv\Writer;


class PurchaseController extends Controller
{
    // 受注履歴一覧
    public function orders() {
        return view("admin/purchase/orders", []);
    }

    // 新規注文一覧
    public function newOrders() {
        return view("admin/purchase/new_orders", []);
    }

    // 注文情報
    public function detail() {
        return view("admin/purchase/detail", []);
    }

    // 発送準備一覧
    public function beforeOrders() {
        return view("admin/purchase/before_orders", []);
    }

    // キャンセル依頼一覧
    public function cancelRequets() {
        return view("admin/purchase/cancel_requests", []);
    }

    // 返品依頼一覧
    public function returnRequests() {
        return view("admin/purchase/return_requests", []);
    }
}