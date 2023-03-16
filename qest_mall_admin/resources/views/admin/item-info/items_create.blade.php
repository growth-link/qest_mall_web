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
            <li class="sidebar-title"><a>商品情報</a></li>
            <li><a href="{{ route('admin.item.items'); }}">商品一覧・編集</a></li>
            <li><a href="{{ route('admin.item.create'); }}" class="selected">商品登録</a></li>
        </ul>

        <ul style="position:absolute;bottom:0px;">
            <li class="sidebar-title"><a>CSVアップロード</a></li>
            <li><a href="" class="selected">商品一括登録</a></li>
            <li><a href="">在庫数一括更新</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<form action="{{ route('admin.item.do.create'); }}" method="GET">
    <div style="width:80%;float:left;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;">商品情報編集</span>
        
        
    </div>
</form>


@endsection