<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | クーポンLP
    |--------------------------------------------------------------------------
    */
    public function coupons(Coupon $coupon) {
        return view('user.coupon.pc.coupons', compact('coupon'));
    }
    public function spCoupons(Coupon $coupon) {
        return view('user.coupon.sp.coupons', compact('coupon'));
    }
}
