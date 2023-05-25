<?php

namespace App\Http\Controllers\Admin;
use Kreait\Firebase\Factory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 管理画面ログイン
    |--------------------------------------------------------------------------
    */

    public function login(Request $request) {
        \Log::Info('access:login');

        if(\FBAuth::isAdminLogin($request)) {
            return redirect()->route("admin.mode_select");
        } else {
            return view("admin/auth/login");
        }
    }

    public function checkLogin(Request $request) {
        $result = \FBAuth::adminLogin($request, $request->login_id, $request->password);
        if(\FBAuth::isAdminLogin($request)) {
            return redirect()->route("admin.mode_select");
        } else {
            return redirect()->route("admin.login");
        }
    }

    public function logout(Request $request) {
        \FBAuth::logout($request);
        return redirect()->route("admin.login");
    }

    public function passwordReset(Request $request) {
        return view("admin/auth/reset_password");
    }

    // パスワード再設定メール送信完了
    public function passwordSendMail(Request $request) {
        return view("admin/auth/password_send_mail");
    }

    public function storePassword(Request $request) {
        return view("admin/auth/reset_password");
    }

    /*
    |--------------------------------------------------------------------------
    | 管理画面選択
    |--------------------------------------------------------------------------
    */

    public function modeSelect() {
        return view("admin/mode_select");
    }

}
