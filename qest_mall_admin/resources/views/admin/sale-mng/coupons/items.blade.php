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
            <li class="sidebar-title"><a>クーポン管理</a></li>
            <li><a href="{{ route('admin.coupons'); }}">クーポン一覧・編集</a></li>
            <li><a href="{{ route('admin.entry_items'); }}">参加申請一覧</a></li>
            <li><a href="{{ route('admin.coupons.create') }}">新規クーポン追加</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<form action="" method="GET">
    <div style="width:80%;float:left;margin-bottom:20px;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:10px;font-size:20px;">クーポン一覧・編集</span>
        <div style="background: #F7F7F7; width: 900px; height: 58px; display: flex; border-radius: 24px / 29px;  font-size: 18px; font-weight: bold;">
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">クーポン数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 132px; text-align: right;"></p>
            <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">参加可能クーポン数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 124px; text-align: right;"></p>
            <div style="margin: 9px 0; width: 1px; height: 40px; background: #CECECE;"></div>
            <p style="margin: 16px 0 16px 25px; line-height: 18px; padding: 4px 0; white-space: nowrap;">参加クーポン数：</p>
            <p style="margin: 16px 25px 0 0; line-height: 18px; padding: 4px 0; width: 141px; text-align: right;"></p>
        </div>
    </div>


    <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:10px;">参加済み</span>
    <div style="width:82%;height:30px;margin-top:20px;">
        <form action="" method="GET">
            <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="ショップ名/ショップID" value="{{$search ?? ""}}">
            <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;">検索</button>
        </form>

        <select style="float:right;border:0px;border-radius:0px 5px 5px 0px;width:200px;padding:5px 10px;background-color:#eeeeee;color:#333333;font-weight:bold;" 
            name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
            <option value="shop_name" >ショップ名</option>
            <option value="shop_tt_code" >ショップID</option>
            <option value="visibility_status">ステータス</option>
        </select>
        <div style="width:80px;padding:3px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#aaaaaa;float:right;font-weight:bold;">並び替え</div>
    </div>

    <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:10px;">未参加</span>
    <div style="width:82%;height:30px;margin-top:20px;">
        <form action="" method="GET">
            <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="ショップ名/ショップID" value="{{$search ?? ""}}">
            <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;">検索</button>
        </form>

        <select style="float:right;border:0px;border-radius:0px 5px 5px 0px;width:200px;padding:5px 10px;background-color:#eeeeee;color:#333333;font-weight:bold;" 
            name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
            <option value="shop_name" >ショップ名</option>
            <option value="shop_tt_code" >ショップID</option>
            <option value="visibility_status">ステータス</option>
        </select>
        <div style="width:80px;padding:3px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#aaaaaa;float:right;font-weight:bold;">並び替え</div>
    </div>
</form>


@endsection