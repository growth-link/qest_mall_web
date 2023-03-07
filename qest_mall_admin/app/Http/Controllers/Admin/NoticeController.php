<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function notices() {
        return view("admin/notice/notices");
    }

    public function noticesDetail() {
        return view("admin/notice/notices_detail");
    }
}
