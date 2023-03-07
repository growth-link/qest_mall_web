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
<div style="text-align:center;margin-top: 100px;">
    <h1 style="font-size:20px;font-weight:20px;color:#aaaaaa;">ようこそ！</h1>
    <h3 style="font-size:16px;font-weight:20px;color:#aaaaaa;">あなたはモール管理者としてログインしています</h3>
</div>

<div style="width:100%;height:200px;text-align:center;margin-top:70px;">
    <div style="margin:0 auto;width:440px;height:200px;">
        <a href="{{ route('admin.mall_top') }}">
            <div style="margin:0 auto;width:200px;height:100px;background-color:lightgray;border-radius:10px;padding-top:35px;float:left;">
                <p style="font-weight:bold;color:gray;font-size:20px;">モール管理</p>
            </div>
        </a>  
        
        <a href="{{ route('admin.shops') }}">
            <div style="margin:0 auto;width:200px;height:100px;background-color:#FBDB5B;border-radius:10px;padding-top:35px;float:left;margin-left:40px;">
                <p style="font-weight:bold;color:gray;font-size:20px;">ショップ管理</p>
            </div>
        </a>
    </div>
</div>

