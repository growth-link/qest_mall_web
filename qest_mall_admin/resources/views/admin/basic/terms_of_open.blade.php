@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@if($is_login)
    @component('admin.layouts.mall_global_menu')
    @endcomponent
@endif
@section('content')

<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>モール基本管理</a></li>
            <li><a href="{{ route('admin.basic-info'); }}">基本情報</a></li>
            <li><a href="{{ route('admin.terms-of-open'); }}" class="selected">出店規約</a></li>
            <li><a href="{{ route('admin.terms-of-service') }}">利用規約/個人情報保護方針</a></li>
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
        <div style="width:90%;height:50px;">
            <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:20px;float:left;">出店規約</span>
            <button class="primary_btn_radius_lightgray" style="margin-top:10px;float:right;">編集</button>
        </div>
        <div style="min-height:50px;width:90%;background-color:#F7F7F7;padding:20px;">
            Qest mallへの出品にあたり、以下のポリシーを遵守する必要があります。ポリシーに違反したり、禁止コンテンツを掲載したりした場合、停止処分になることがあります。<br><br>

            出品者行動規範<br>
            Qest mallを利用すると、数千万人の購入者を対象に商品を出品できます。購入者と出品者に公正かつ信頼できる体験を提供できるよう努めています。これを実現するため、以下に記載した行動規範の原則を遵守していただくようお願いします。<br>

            出品者行動規範の原則<br>
            すべての準拠法およびQest mallのすべての利用規約を遵守する。<br>
            アカウント情報を常に最新の状態に保つ。<br>
            自分自身について虚偽の情報は決して登録しない。<br>
            Qest mallを利用する購入者に安心して買い物をしてもらえるよう常に努力する。<br>
            Qest mallを利用する購入者に危害を及ぼすおそれのある商品は決して出品しない。<br>
            誤解を招く行為、不適切な行為、または不快感を与える行為を決してしない。この原則は、次のような内容すべてに当てはまります。なお、これらは例として挙げたもので、これに限定されるわけではありません………<br>
        </div>
    </div>
</form>


@endsection