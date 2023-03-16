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


    /*
    |--------------------------------------------------------------------------
    | ショップ管理
    |--------------------------------------------------------------------------
    */

    // ショップ管理 - お知らせ配信リスト
    function noticeSendLists() {
        return view("admin/notice/send_lists");
    }

    // ショップ管理 - お知らせ配信リスト追加
    function noticeSendListsCreate() {
        return view("admin/notice/send_lists_create");
    }

    // ショップ管理 - お知らせ配信リスト編集
    function noticeSendListsEdit() {
        return view("admin/notice/send_lists_edit");
    }

    // ショップ管理 - お知らせ配信履歴
    function noticeHistories() {
        return view("admin/notice/histories");
    }
}
