<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function topMall() {
        return view("admin/top/mall_top");
    }

    public function topShop() {
        return view("admin/top/shop");
    }
}
