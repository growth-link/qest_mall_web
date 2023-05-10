<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\MailController;

class RegisterController extends Controller
{
    ///////////////////////////////////////////////
    // 会員情報入力
    public function register() {
        return view("user.register.pc.register");
    }

    public function spRegister() {
        return view("user.register.sp.register");
    }

    ///////////////////////////////////////////////
    // 会員情報入力確認
    public function registerConfirm() {
        return view("user.register.pc.regsiter_confirm");
    }

    public function spRegisterConfirm() {
        return view("user.register.sp.register_confirm");
    }

    ///////////////////////////////////////////////
    // 新規会員登録（メールアドレス認証）
    public function registerSendMail(Request $request) {
        $mail = new MailController();
        $mail->send($request);

        return view("user.register.pc.register_send_mail");
    }

    public function spRegisterSendMail(Request $request) {
        return view("user.register.sp.register_send_mail");
    }
}
