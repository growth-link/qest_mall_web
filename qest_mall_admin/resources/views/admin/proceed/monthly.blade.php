<!-- 管理画面ログイン -->
@extends("admin.layout")
@if(session('is_mall'))
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

    .table-cell-head {
        width:70%;
        padding:10px;
        border:1px solid #cccccc;
        border-collapse: collapse;
    }

    .table-cell-body {
        width:30%;
        padding:10px;
        border:1px solid #cccccc;
        border-collapse: collapse;
        text-align:right;
    }

    .ui.bottom.attached.active.tab.segment {
        height: 1000px;
    }
</style>
<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>売上・会計管理</a></li>
            <li><a href="{{ route('statistics'); }}">統計情報</a></li>
            @if(session("is_mall"))
                <li><a href="{{ route('histories'); }}">会計履歴</a></li>
            @endif
            <li><a href="{{ route('monthly'); }}" class="selected">月別精算明細</a></li>
        </ul>
    </nav>
</div>


<form action="" method="GET">
    <div style="width:80%;float:left;min-height:700px;overflow-y:scroll;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:30px;">月別精算明細</span>

        <div style="width:92%;height:30px;margin-top:20px;">
            <select style="float:right;border:0px;border-radius:0px 5px 5px 0px;width:200px;padding:5px 10px;background-color:#eeeeee;color:#333333;font-weight:bold;" 
                name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
                <option value="shop_name" >2023</option>
            </select>
            <div style="width:80px;padding:4px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#aaaaaa;float:right;font-weight:bold;">表示期間</div>
        </div>

        <div style="width:90%;overflow-y:hidden;padding:10px;margin-top:20px;">
            <div class="ui top attached tabular menu">
                <a class="active item" data-tab="tab1">1月</a>
                <a class="item" data-tab="tab2">2月</a>
                <a class="item" data-tab="tab3">3月</a>
                <a class="item" data-tab="tab4">4月</a>
                <a class="item" data-tab="tab5">5月</a>
                <a class="item" data-tab="tab6">6月</a>
                <a class="item" data-tab="tab7">7月</a>
                <a class="item" data-tab="tab8">8月</a>
                <a class="item" data-tab="tab9">9月</a>
                <a class="item" data-tab="tab10">10月</a>
                <a class="item" data-tab="tab11">11月</a>
                <a class="item" data-tab="tab12">12月</a>
            </div>
            @for ($i = 0; $i < 13; $i++)
            <div class="ui bottom attached @if($i == 1) active @endif tab segment" data-tab="tab{{$i}}" style="height:1600px;">

                <div style="widht:90%;padding:15px 0px;margin-left:3%;">
                    <p style="float:left">決済確定額明細 伝票番号No0000001</p>
                    <a href="/pdf/payment-statement" style="font-weight:bold;float:right;">支払い明細書ダウンロード</a>
                </div>
            
                <table style="width:90%;margin-left:5%;margin-top:40px;">
                    <tr>
                        <td class="table-cell-head" style="font-weight:bold;">売上高</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">商品代金(10%)</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">商品代金(8%)</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">配送料</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">ラッピング包装代</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">オプション</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">消費税額(10%)</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">消費税額(8%)</td>
                        <td class="table-cell-body"></td>
                    </tr>
                </table>

                <table style="width:50%;margin-left:5%;float:right;margin-right:5%;">
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">合計</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                </table>


                <table style="width:90%;margin-left:5%;margin-top:20px;margin-top:100px;">
                    <tr>
                        <td class="table-cell-head" style="font-weight:bold;">決済種別売上</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">イオンカード決済金額</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">その他カード決済金額</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">WAONポイント利用金額</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">クーポン</td>
                        <td class="table-cell-body"></td>
                    </tr>
                </table>

                <table style="width:50%;margin-left:5%;float:right;margin-right:5%;">
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">合計</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                </table>



                <table style="width:90%;margin-left:5%;margin-top:20px;margin-top:10px;">
                    <tr>
                        <td class="table-cell-head" style="font-weight:bold;">手数料</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">販売営業料</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">システム手数料</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">販促費</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">イオンカード手数料</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">その他クレジットカード手数料</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">WAONPOINT手数料</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">クーポン負担金</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">イベント用WAONPOINT負担金</td>
                        <td class="table-cell-body"></td>
                    </tr>
                    <tr>
                        <td class="table-cell-head">その他販促協力金</td>
                        <td class="table-cell-body"></td>
                    </tr>
                </table>

                <table style="width:50%;margin-left:5%;float:right;margin-right:5%;">
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">小計</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">消費税</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">合計</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                </table>


                <table style="width:50%;margin-left:5%;float:right;margin-right:5%;margin-top:50px;">
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">売上高合計</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">手数料合計</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                    <tr>
                        <td class="table-cell-head" style="width:100px;font-weight:bold;">お支払い金額</td>
                        <td class="table-cell-body" style="width:54%;">¥</td>
                    </tr>
                </table>
            </div>
            @endfor
        </div>
    </div>
</form>
@section("script")
    <script>
        $('.menu .item').tab();
    </script>
@endsection

