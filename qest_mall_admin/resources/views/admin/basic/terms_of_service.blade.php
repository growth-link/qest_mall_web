@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@component('admin.layouts.mall_global_menu')
@endcomponent
@section('content')

<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>モール基本管理</a></li>
            <li><a href="{{ route('admin.basic-info'); }}">基本情報</a></li>
            <li><a href="{{ route('admin.terms-of-open'); }}">出店規約</a></li>
            <li><a href="{{ route('admin.terms-of-service') }}" class="selected">利用規約/個人情報保護方針</a></li>
            <li><a href="{{ route('admin.adminUsers') }}">管理ユーザー</a></li>
            <li><a href="{{ route('admin.staff') }}">スタッフマスタ</a></li>
            <li><a href="{{ route('admin.top-banners') }}">トップバナー編集</a></li>
            <li><a href="{{ route('admin.ad-banners') }}">広告バナー編集</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<form action="" method="GET">
    <div style="width:80%;float:left;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:50px;font-size:20px;">利用規約/個人情報保護方針</span>

        <div style="min-height:50px;width:75%;margin-left:1%;background-color:#F7F7F7;padding:20px;">
        </div>
    </div>
</form>

@endsection