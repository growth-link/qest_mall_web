<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Notice;

class NoticeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | お知らせ一覧
    |--------------------------------------------------------------------------
    */
    public function notices(Request $request) {
        $notices = Notice::get();
        \Log::Info($notices);

        return view('user.notice.pc.notices', [
            "notices" => $notices
        ]);
    }

    public function spNotices(Request $request) {
        $notices = Notice::get();

        return view('user.notice.sp.notices', [
            "notices" => $notices
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | お知らせ詳細
    |--------------------------------------------------------------------------
    */

    public function noticesDetail(Request $request) {
        $notice_id = $request->notice_id;
        $notice = Notice::where("id", $notice_id)->first();

        return view('user.notice.pc.notices_detail', [
            "notice" => $notice
        ]);
    }

    public function spNoticesDetail(Request $request) {
        $notice_id = $request->notice_id;
        $notice = Notice::where("id", $notice_id)->first();

        return view('user.notice.sp.notices_detail', [
            "notice" => $notice
        ]);
    }
}
