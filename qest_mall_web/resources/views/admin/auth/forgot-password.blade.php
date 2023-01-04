<!-- 管理画面ログイン -->
@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@section('content')
<style>
    .login-form-input {
        width: 400px;
        height: 60px;
        border: 1px solid lightgray;
        border-radius: 4px;
        padding: 10px;
        font-size: 18px;
        color: #333333;
    }

    .login-btn {
        width: 300px;
        border: 0px;
        border-radius: 30px;
        margin-top: 70px;
        padding: 13px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #333333;
        background-color: #FBDB5B;
    }
</style>
<div style="text-align:center;margin-top: 80px;">
    <h1 style="font-size:20px;font-weight:20px;color:#333333;">パスワード再設定</h1>
</div>

<div style="width:100%;height:450px;text-align:center;margin-top:70px;">
    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div style="width:640px;height:30px;margin:0 auto;margin-top:10px;font-weight:bold;color:#444444;">
            ご利用中のメールアドレスを入力してください。<br>
            パスワード再設定のためのURLをお送りします
        </div>

        @csrf
        <!-- メールアドレス -->
        <div style="width:640px;height:70px;margin:0 auto;margin-top:60px;">
            <p style="color:red;float:none;"></p>
            <div style="width:400px;margin:0 auto;text-align:left;font-weight:bold;color:#333333;margin-bottom:10px;">メールアドレス</div>
            <input id="email" type="text" class="login-form-input" required autofocus><br>
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        <button class="login-btn">送信する</button>

        <div style="width:640px;height:70px;margin:0 auto;margin-top:50px;">
            <a href="{{ route('admin.password.request') }}" style="color:#1D54A7;text-decoration:none;">パスワードを忘れた場合</a>
        </div>
    </form>

    {{-- <div style="width:640px;height:30px;margin:0 auto;margin-top:10px;font-weight:bold;color:#444444;">
        IDを忘れてしまった場合はOPA担当窓口へお問い合わせください
    </div>
    <div style="width:400px;height:100px;padding:10px;margin:0 auto;border:0px;border-radius:10px;background-color:#eeeeee;">
        <p style="font-weight:bold;color:gray;margin-top:10px;">QESTMall担当窓口</p>
        <p style="font-weight:bold;font-size:28px;color:gray;margin-top:10px;">000-000-0000</p>
    </div> --}}
</div>