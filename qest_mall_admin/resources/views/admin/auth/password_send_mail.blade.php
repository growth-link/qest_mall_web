<!-- 管理画面ログイン -->
@extends("admin.layout")
@component('admin.layouts.no_login_header')
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

<div style="text-align:center;margin-top: 80px;">
    <p>パスワードの再設定を受け付けました！</p>
    <p>以下のメールアドレス宛に、パスワード再設定のためのURLをお送りしましたのでご確認ください。</p>
</div>

<div style="text-align:center;margin-top: 40px;">
    <h1 style="font-size:20px;font-weight:20px;color:#333333;">nakagawa@museit.co.jp</h1>
</div>

<div style="text-align:center;margin-top: 40px;">
    <p>※まだパスワード再設定は完了していません。必ずメール記載のURLから再設定を行ってください。</p>
    <p>※URLの有効期限は〇〇時間です。有効期限が過ぎた場合は再度リクエストをお願いします。</p>
    <p>※「@****.****」からのメールを受信許可してください。しばらくたってもメールが届かない場合は、</p>
    <p>迷惑フォルダに仕分けされているかメールアドレスの入力に誤りがある可能性があります。</p>
</div>

<div style="width:100%;height:450px;text-align:center;margin-top:70px;">
        <div style="width:640px;height:70px;margin:0 auto;margin-top:50px;">
            <a href="{{ route('admin.login') }}" style="color:#1D54A7;text-decoration:none;">TOPへ戻る</a>
        </div>
</div>

