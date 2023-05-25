<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        //if (!Auth::check()) { return redirect('/'); } // ログインチェック
        // return redirect('/top'); // リダイレクト
        return view('user.login.pc.login');
    }

    public function checkLogin(Request $request) {
        $result = \FBAuth::login($request, $request->login_id, $request->password);
        if(\FBAuth::isLogin($request)) {
            return redirect()->route("top");
        } else {
            return redirect()->route("admin.login");
        }

        return view('user.login.pc.login');
    }

    public function spLogin() {
        return view('user.login.sp.login');
    }

    public function spCheckLogin(Request $request) {
        return view('user.login.sp.login');
    }

    public function passwordReset(Request $request) {
        return view('user.login.pc.password_reset');
    }

    public function spPasswordReset(Request $request) {
        return view('user.login.sp.password_reset');
    }

    public function logout() {
        return redirect()->route("user.login.pc.logout");
    }

    public function spLogout() {
        return redirect()->route("user.login.sp.logout");
    }
}
