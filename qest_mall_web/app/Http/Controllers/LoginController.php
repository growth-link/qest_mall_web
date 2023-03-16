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
        return view('user.login.pc.login');
    }

    public function spLogin() {
        return view('user.login.sp.login');
    }

    public function spCheckLogin(Request $request) {
        return view('user.login.sp.login');
    }

    public function passwordReset(Request $request) {
        return view('user.login.pc.password.reset');
    }

    public function spPasswordReset(Request $request) {
        return view('user.login.sp.password.reset');
    }
}
