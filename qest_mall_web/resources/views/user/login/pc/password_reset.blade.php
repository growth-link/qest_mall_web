<!-- 管理画面ログイン -->
@extends("layout")
@component('user.layouts.pc.guest_header')
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
<div style="text-align:center;margin-top: 100px;">
    <h1 style="font-size:20px;font-weight:20px;color:#333333;">パスワード再設定</h1>
</div>

<div style="text-align:center;margin-top: 100px;">
    <p>ご利用中のメールアドレスを入力してください。</p>
    <p>パスワード再設定のためのURLをお送りします。</p>
</div>

<div style="width:100%;height:450px;text-align:center;margin-top:70px;">
    <form method="POST" action="{{ route('password.send_mail') }}">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        @csrf

        <!-- エラーメッセージ -->
        @if ($errors->has('message'))
            <p style="color:red;">ユーザーIDまたはパスワードが正しくありません。</p>
            {{-- <p style="color:red;">{{$errors->first('message')}}</p> --}}
        @endif

        <!-- ログインID -->
        <div style="width:640px;height:70px;margin:0 auto;">
            <p style="color:red;float:none;"></p>
            <div style="width:400px;margin:0 auto;margin-bottom:10px;text-align:left;font-weight:bold;color:#333333;">メールアドレス</div>
            <input id="login_id" name="login_id" type="text" class="login-form-input" required autofocus><br>
        </div>

        <button class="login-btn">送信する</button>
    </form>
</div>


@endsection
