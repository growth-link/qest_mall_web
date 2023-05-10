@extends("admin.layout")
@if(session('is_mall'))
  @component('admin.layouts.mall_shop_header')
  @endcomponent
@else
  @component('admin.layouts.shop_header')
  @endcomponent
@endif
@component('admin.layouts.mall_global_menu')
@endcomponent
@section('content')

<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>クーポン管理</a></li>
            <li><a href="{{ route('admin.coupons'); }}">クーポン一覧・編集</a></li>
            <li><a href="{{ route('admin.entry_items'); }}">参加申請一覧</a></li>
            <li><a href="{{ route('admin.coupons.create') }}">新規クーポン追加</a></li>
        </ul>

        <ul style="position:absolute;bottom:0px;">
            <li class="sidebar-title"><a>CSVアップロード</a></li>
            <li><a href="" class="selected">商品一括登録</a></li>
            <li><a href="">在庫数一括更新</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<form action="" method="GET">
    <div style="width:80%;float:left;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:10px;">商品公開状況</span>
        <div style="background: #F7F7F7; width: 900px; height: 58px; display: flex; border-radius: 24px / 29px;  font-size: 18px; font-weight: bold;">
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">商品登録数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 132px; text-align: right;">1,235</p>
            <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">在庫切れ商品数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 124px; text-align: right;">300</p>
            <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">非表示商品数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 141px; text-align: right;">32</p>
        </div>
    </div>
</form>


@endsection