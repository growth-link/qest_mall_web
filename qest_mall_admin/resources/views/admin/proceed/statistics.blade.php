<!-- 管理画面ログイン -->
@extends("admin.layout")
@if(session('account_type') == 0)
    @component('admin.layouts.header')
    @endcomponent
    @component('admin.layouts.mall_global_menu')
    @endcomponent
@elseif(session('account_type') == 1)
    @component('admin.layouts.mall_shop_header')
    @endcomponent
    @component('admin.layouts.mall_global_menu')
    @endcomponent
@else
    @component('admin.layouts.shop_header')
    @endcomponent
    @component('admin.layouts.shop_global_menu')
    @endcomponent
@endif

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
<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>売上・会計管理</a></li>
            <li><a href="{{ route('statistics'); }}" class="selected">統計情報</a></li>
            @if(session("is_mall"))
                <li><a href="{{ route('histories'); }}">会計履歴</a></li>
            @endif
            <li><a href="{{ route('monthly'); }}">月別精算明細</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<form action="" method="GET">
    <div style="width:80%;float:left;height:700px;overflow-y:scroll;">
        <div style="height:50px;width:92%;">
            <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:30px;float:left;">統計情報</span>
            <button class="primary_btn_radius_menu dropdown" style="float:right;margin-top:15px;padding:5px 50px;">CSV出力</button>
        </div>

        <div style="width:92%;height:30px;margin-top:20px;">
            <select style="float:right;border:0px;border-radius:0px 5px 5px 0px;width:200px;padding:5px 10px;background-color:#eeeeee;color:#333333;font-weight:bold;" 
                name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
                <option value="shop_tt_code" >月別</option>
                <option value="shop_name" >月間累計</option>
            </select>
            <div style="width:80px;padding:4px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#aaaaaa;float:right;font-weight:bold;">表示期間</div>
        </div>

        <table id="histories_table" style="width:92%;font-weight:normal;margin-top:20px;">
            <thead>
                <tr style="background-color:#f2f2f2;padding:10px;">
                    <th style="padding:15px 0px;">月別</th>
                    <th>売上</th>
                    <th>注文数</th>
                    <th>セッション数</th>
                    <th>PV数</th>
                    <th>CVR</th>
                    <th>客単価</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:15px 0px;" class="td-center">2023年 5月</td>
                    <td class="td-center">27千円</td>
                    <td class="td-center">3</td>
                    <td class="td-center">1000</td>
                    <td class="td-center">100</td>
                    <td class="td-center">3%</td>
                    <td class="td-center">{{ number_format(3000) }}円</td>
                </tr>
            </tbody>
        </table>

        <div style="width:90%;overflow-y:hidden;padding-10px;">
            <div class="ui top attached tabular menu">
                <a class="active item" data-tab="tab1">売上</a>
                <a class="item" data-tab="tab2">注文数</a>
                <a class="item" data-tab="tab3">セッション数</a>
                <a class="item" data-tab="tab4">PV数</a>
                <a class="item" data-tab="tab5">CVR</a>
                <a class="item" data-tab="tab6">客単価</a>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="tab1">
                
            </div>
            <div class="ui bottom attached tab segment" data-tab="tab2">
                
            </div>
            <div class="ui bottom attached tab segment" data-tab="tab3">
                
            </div>
            <div class="ui bottom attached tab segment" data-tab="tab4">
                
            </div>
            <div class="ui bottom attached tab segment" data-tab="tab5">
                
            </div>
            <div class="ui bottom attached tab segment" data-tab="tab6">
                
            </div>
        </div>

        <table id="histories_table" style="width:92%;font-weight:normal;margin-top:20px;">
            <thead>
                <tr style="background-color:#f2f2f2;padding:10px;">
                    <th style="padding:15px 0px;">月別</th>
                    <th>売上</th>
                    <th>注文数</th>
                    <th>セッション数</th>
                    <th>PV数</th>
                    <th>CVR</th>
                    <th>客単価</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:15px 0px;" class="td-center">2023年 5月</td>
                    <td class="td-center">27千円</td>
                    <td class="td-center">3</td>
                    <td class="td-center">1000</td>
                    <td class="td-center">100</td>
                    <td class="td-center">3%</td>
                    <td class="td-center">{{ number_format(3000) }}円</td>
                </tr>
            </tbody>
        </table>
    </div>
</form>

@section("script")
    <script>
        $('.menu .item').tab();
    </script>
@endsection

