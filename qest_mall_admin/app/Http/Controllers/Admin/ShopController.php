<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopManageShops(Request $request) {
        return view('admin/shop/manage_shops');
    }

    public function shopManageShopsItems(Request $request) {
        return view('admin/shop/manager_shops_items');
    }

    public function shopManageShopsContract(Request $request) {
        return view('admin/shop/manage_shops_contract');
    }

    public function shopManageShopsContractCorporateInfoEdit(Request $request) {
        return view('admin/shop/manage_shops_contract_corporate_info_edit');
    }

    public function shopManageShopsContractContractInfoEdit(Request $request) {
        return view('admin/shop/manage_shops_contract_contract_info_edit');
    }

    public function shopManageChangeRequests(Request $request) {
        return view('admin/shop/manage_change_requests');
    }

    public function shopShopsCreate(Request $request) {
        return view('admin/shop/shops_create');
    }
}
