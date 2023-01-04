<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        //if (!Auth::check()) { return redirect('/'); } // ログインチェック
        //return redirect('/top'); // リダイレクト
        return view('user/login/login');
    }

    public function checkLogin(Request $request) {
        return view('user/login/login');
    }

    public function spLogin() {
        return view('user/login/login_sp');
    }

    public function spCheckLogin(Request $request) {
        return view('user/login/login');
    }
}
