<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    // ショップ一覧
    public function shopManageShops(Request $request) {
        return view('admin/shop/manage_shops');
    }

    // 商品一覧
    public function shopManageShopsItems(Request $request) {
        return view('admin/shop/manager_shops_items');
    }

    // 契約情報
    public function shopManageShopsContract(Request $request) {
        return view('admin/shop/manage_shops_contract');
    }

    // 登録法人情報編集
    public function shopManageShopsContractCorporateInfoEdit(Request $request) {
        return view('admin/shop/manage_shops_contract_corporate_info_edit');
    }

    // 契約情報編集
    public function shopManageShopsContractContractInfoEdit(Request $request) {
        return view('admin/shop/manage_shops_contract_contract_info_edit');
    }

    // 公開申請一覧
    public function shopManageChangeRequests(Request $request) {
        return view('admin/shop/manage_change_requests');
    }


    // 新規ショップ追加
    public function shopShopsCreate(Request $request) {
        return view('admin/shop/shops_create');
    }

    // 新規ショップ追加(入力内容確認)
    public function shopShopsCreateConfirm(Request $request) {
        return view('admin/shop/shops_create_confirm');
    }
}
