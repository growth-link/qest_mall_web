<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoupinController extends Controller
{
    public function coupons(Request $request) {
        return view("admin/sale-mng/coupons");
    }
    
    public function entryShops(Request $request) {
        return view("admin/sale-mng/entry-shops");
    }
    
    public function entryItems(Request $request) {
        return view("admin/sale-mng/entry-items");
    }
    
    public function createCoupon(Request $request) {
        return view("admin/sale-mng/coupons/create");
    }
    
    public function createLp(Request $request) {
        return view("admin/sale-mng/coupon-lps/create");
    }
    
    public function previewLp(Request $request) {
        return view("admin/sale-mng/coupon-lps/preview");
    }
    
    public function couponDetail(Request $request) {
        return view("admin/sale-mng/coupons/detail");
    }
    
    public function editCoupon(Request $request) {
        return view("admin/sale-mng/coupons/edit");
    }
    
    public function editCouponItems(Request $request) {
        return view("admin/sale-mng/coupons/items");
    }
}
