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
        if(\FBAuth::isLogin($request)) {
            return redirect()->route("top");
        } else {
            return redirect()->route("login");
        }
    }

    public function checkLogin(Request $request) {
        $result = \FBAuth::login($request, $request->login_id, $request->password);
        if(\FBAuth::isLogin($request)) {
            return redirect()->route("admin.mode_select");
        } else {
            return redirect()->route("admin.login");
        }
    }

    public function logout(Request $request) {
        \FBAuth::logout($request);
        return redirect()->route("admin.login");
    }

    public function passwordReset() {
        return view("admin/auth/reset_password");
    }

    public function storePassword() {
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
