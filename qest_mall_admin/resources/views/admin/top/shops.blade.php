<!-- 管理画面ログイン -->
@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@component('admin.layouts.mall_global_menu')
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

    .wrap {
        position: relative; 
        overflow: hidden;
        width:100%;
    }
    
    .wrap ul {
        position: relative;
        left: 45%; 
        float: left;
    }
    
    .wrap ul li {
        position: relative;
        left: -45%; 
        float: left;
        list-style: none;
        margin-left:20px;
    }
</style>

<div style="width::96%;min-height:100px;margin-left:2%;margin-top:20px;">
    <p style="color:#333333;font-weight:bold;font-size:20px;">ショップ一覧</p>

    <!-- 検索フィールド -->
    <div style="width:96%;height:30px;">
        <form action="" method="GET">
            <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="ショップ名/ショップID" value="{{$search ?? ""}}">
            <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;">検索</button>
        </form>

        <select style="float:right;border:0px;border-radius:0px 5px 5px 0px;width:200px;padding:5px 10px;background-color:#eeeeee;color:#333333;font-weight:bold;" 
            name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
            <option value="shop_name" @if($sort == "shop_name") selected @endif>ショップ名</option>
            <option value="shop_tt_code" @if($sort == "shop_id") selected @endif>ショップID</option>
            <option value="visibility_status" @if($sort == "visibility_status") selected @endif>ステータス</option>
        </select>
        <div style="width:80px;padding:3px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#aaaaaa;float:right;font-weight:bold;">並び替え</div>
    </div>

    <table style="width:96%;margin-top:20px;border-collapse:collapse;">
        <thead>
            <th style="width:60%;background-color:#eeeeee;padding:10px 0px;">ショップ名</th>
            <th style="width:10%;background-color:#eeeeee;padding:10px 0px;">ショップID</th>
            <th style="width:10%;background-color:#eeeeee;padding:10px 0px;">ステータス</th>
            <th style="width:6%;background-color:#eeeeee;padding:10px 0px;"></th>
        </thead>
        <tbody>
            @foreach($shops as $shop)
                <tr style="border-bottom:1px solid #eeeeee;">
                    <td style="padding: 10px 10px;">{{$shop->shop_name}}</td>
                    <td>{{$shop->shop_tt_code}}</td>
                    <td style="text-align:center;">
                        @if($shop->visibility_status == 1)
                            公開中
                        @else
                            非公開
                        @endif
                    </td>
                    <td style="text-align:center;">
                        <a href="{{ route('admin.shop_top', ['shop_id']); }}">閲覧</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="wrap" style="font-size:20px;">
        <ul>
            <li class="cls1">＜</li>
            <li class="cls1">1</li>
            <li class="cls1">2</li>
            <li class="cls1">3</li>
            <li class="cls1">4</li>
            <li class="cls1">5</li>
            <li class="cls1">＞</li>
        </ul>
    </div>
</div>
@endsection

@section('script')
<script>

</script>
@endsection
