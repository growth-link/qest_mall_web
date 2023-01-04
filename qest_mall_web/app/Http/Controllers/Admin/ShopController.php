<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopManageShops(Request $request) {
        return view('user/login/login');
    }

    public function shopManageShopsItems(Request $request) {
        return view('user/login/login');
    }

    public function shopManageShopsContract(Request $request) {
        return view('user/login/login');
    }

    public function shopManageShopsContractCorporateInfoEdit(Request $request) {
        return view('user/login/login');
    }

    public function shopManageShopsContractContractInfoEdit(Request $request) {
        return view('user/login/login');
    }

    public function shopManageChangeRequests(Request $request) {
        return view('user/login/login');
    }
}
