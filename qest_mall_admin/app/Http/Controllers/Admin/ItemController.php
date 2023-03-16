<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemsCreate() {
        return view("admin/items/");
    }

    public function noticesDetail() {
        return view("admin/notice/notices_detail");
    }
}
