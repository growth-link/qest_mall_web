<!-- 管理画面ログイン -->
@extends("layout")
@component('user.layouts.pc.header')
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
    <h1 style="font-size:20px;font-weight:20px;color:#333333;">会員の方はログインしてください</h1>
</div>

<div style="width:100%;height:450px;text-align:center;margin-top:70px;">
    <form method="POST" action="{{ route('check_login') }}">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        @csrf
        <!-- ログインID -->
        <div style="width:640px;height:70px;margin:0 auto;">
            <p style="color:red;float:none;"></p>
            <div style="width:400px;margin:0 auto;margin-bottom:10px;text-align:left;font-weight:bold;color:#333333;">ユーザーID</div>
            <input id="login_id" name="login_id" type="text" class="login-form-input" required autofocus><br>
        </div>

        <!-- パスワード -->
        <div style="width:640px;height:70px;margin:0 auto;margin-top:50px;">
            {{-- <p style="color:red;float:none;">エラーメッセージ：$errors->get('email')</p> --}}
            <div style="width:400px;margin:0 auto;margin-bottom:10px;text-align:left;font-weight:bold;color:#333333;">パスワード</div>
            <input id="password" name="password" type="password" class="login-form-input" required autocomplete="current-password">
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        <button class="login-btn">ログイン</button>

        <div style="width:640px;height:70px;margin:0 auto;margin-top:50px;">
            <a href="{{ route('password_reset') }}" style="color:#1D54A7;text-decoration:none;">パスワードを忘れた場合</a>
        </div>
    </form>

    {{-- <div style="width:640px;height:30px;margin:0 auto;margin-top:10px;font-weight:bold;color:#444444;">
        IDを忘れてしまった場合はOPA担当窓口へお問い合わせください
    </div>
    <div style="width:400px;height:100px;padding:10px;margin:0 auto;border:0px;border-radius:10px;background-color:#eeeeee;">
        <p style="font-weight:bold;color:gray;margin-top:10px;">QESTMall担当窓口</p>
        <p style="font-weight:bold;font-size:28px;color:gray;margin-top:10px;">000-000-0000</p>
    </div> --}}

    <hr style="width:70%;margin:0 auto;border:1px solid #cccccc;">

    <form method="POST" action="{{ route('register.send_mail') }}">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        @csrf
        <!-- ログインID -->
        <div style="width:640px;height:70px;margin:0 auto;">
            <p style="color:red;float:none;"></p>
            <div style="width:400px;margin:0 auto;margin-bottom:10px;text-align:left;font-weight:bold;color:#333333;">メールアドレス</div>
            <input id="email" type="text" class="login-form-input" required autofocus><br>
        </div>

        <button class="login-btn">新規会員登録</button>

        <div style="width:640px;height:70px;margin:0 auto;margin-top:10px;">
            <span style="color:#777777;">※「@qest-mall.jp」からのメールを受信許可してください</a>
        </div>
    </form>
</div>



<!-- モーダル -->
<div id="second_cert_modal" class="ui modal mini">
    <img src="/images/user/icon_modal_close.png" style="position:absolute;right:10px;top:10px;" onclick="closeModal();">
    <div class="content">
        <section>
            <span class="ECM_CheckboxInput-LabelText">2段階認証</span>
        </section>


        <section style="margin-top:20px;">
        </section>

        <section style="margin-top:20px;">
            <div class="ui input">
                <input type="text" placeholder="Search...">
            </div>
        </section>

        <section style="margin-top:20px;">
            <div class="ui input">
                <input type="text" placeholder="Search...">
            </div>
        </section>


        <section>
            <div class="modal-section-title">除外キーワード</div>
            <input type="text" class="switch_TextInput" placeholder="指定なし" style="width:50%;">
        </section>

        <section style="text-align:center;">
            <button class="primary_btn_radius">
                認証してログインする
            </button>
        </section>
    </div>
</div>
@section("script")
<script>
    function showSecondCertModal() {
        $('#second_cert_modal').modal({
            centered: false
        }).modal('show');
    }
</script>
@endsection
