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

    ::-webkit-datetime-edit-year-field:not([aria-valuenow]),
    ::-webkit-datetime-edit-month-field:not([aria-valuenow]),
    ::-webkit-datetime-edit-day-field:not([aria-valuenow]) {
        color: transparent;
    }
</style>
<!-- サイドバー -->
<div style="width:20%;float:left;top:100px;position:sticky;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>売上・会計管理</a></li>
            <li><a href="{{ route('statistics'); }}">統計情報</a></li>
            <li><a href="{{ route('histories'); }}" class="selected">会計履歴</a></li>
            <li><a href="{{ route('monthly'); }}">月別精算明細</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<!-- 手数料モーダル -->
<div id="password_modal" class="ui modal mini" style="padding:20px;">
    <form>
    <img src="/images/user/icon_modal_close.png" style="position:absolute;right:30px;top:30px;width:20px;height:20px;" onclick="closeModal();">
    <div class="content">
        <section>
            <span class="ECM_CheckboxInput-LabelText">手数料を追加</span>
        </section>


        <section style="margin-top:20px;">
        </section>

        <section style="margin-top:20px;">
            <div style="width:100%;height:30px;">
                <label style="float:left;">発生日</label><div class="required-badge" style="font-size:12px;min-width:20px;float:left;margin-left:10px;padding:2px;">必須</div>
            </div>
            <div style="width:100%;">
                <input type="date" value="" placeholder="" class="input-text" style="width:100%;font-size:14px;" >
            </div>
        </section>

        <section style="margin-top:20px;">
            <div style="width:100%;height:30px;">
                <label style="float:left;">科目</label><div class="required-badge" style="font-size:12px;min-width:20px;float:left;margin-left:10px;padding:2px;">必須</div>
            </div>
            <div>
                <select id="" style="width:100%;border:0px;">
                    <option value="0"></option>
                    <option value="1">その他販促協力金</option>
                    <option value="2">イベント用WAONポイント負担金</option>
                    <option value="3">クーポン券負担金</option>
                </select>
                <hr style="border:1px solid rgba(0,0,0,.87);">
            </div>
        </section>

        <section style="margin-top:20px;">
            <div style="width:100%;height:30px;">
                <label style="float:left;">金額</label><div class="required-badge" style="font-size:12px;min-width:20px;float:left;margin-left:10px;padding:2px;">必須</div>
            </div>
            <div>
                <input type="price" value="" style="width:100%;font-size:14px;" placeholder="" class="input-text">
            </div>
        </section>

        <section style="margin-top:20px;">
            <div style="width:100%;height:30px;">
                <label style="float:left;">備考</label><div class="required-badge" style="font-size:12px;min-width:20px;float:left;margin-left:10px;padding:2px;">必須</div>
            </div>
            <div>
                <input type="memo" value="" style="width:100%;font-size:14px;" placeholder="" class="input-text">
            </div>
        </section>

        <section style="text-align:center;margin-top:50px;">
            <button class="primary_btn_radius" style="width:80%;">
                入力内容を確認する
            </button>
        </section>
    </div>
    </form>
</div>
<!-- 手数料モーダル -->


<!-- 手数料確認モーダル -->
<div id="confirm_modal" class="ui modal mini" style="padding:20px;">
    <img src="/images/user/icon_modal_close.png" style="position:absolute;right:30px;top:30px;width:20px;height:20px;" onclick="closeModal();">
    <div class="content">
        <section>
            <span class="ECM_CheckboxInput-LabelText">入力内容を確認</span>
        </section>


        <section style="margin-top:20px;">
        </section>

        <section style="margin-top:20px;">
            <label>発生日</label>
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
            <button class="primary_btn_radius" style="width:80%;">
                登録する
            </button>
            <button class="primary_btn_radius_gray" style="width:80%;" onclick="closeConfirmModal();">
                キャンセル
            </button>
        </section>
    </div>
</div>
<!-- 手数料モーダル -->



<form action="" method="GET">
    <div style="width:80%;float:left;height:700px;overflow-y:scroll;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:30px;">会計履歴</span>

        <div style="margin-bottom:20px;">
            <!-- ラジオボタン + テキスト-->
            <input class="visually-hidden" type="radio" name="fruits" id="apple" checked/>
            <label class="radio-label" for="apple">全体</label>
            <input class="visually-hidden" type="radio" name="fruits" id="orange"/>
            <label class="radio-label" for="orange">ショップ別</label>
        </div>

        <!-- 検索フィールド -->
        
        <div style="width:96%;height:50px;">
            <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="ショップ名/ショップID" value="{{$search ?? ""}}">
            <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;margin-right:20px;">検索</button>
        
            <div style="float:left;">
                <span style="float:left;margin-right:10px;padding:5px;">期間選択</span>
                <input name="search" type="date" style="height:30px;width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="" value="{{$search ?? ""}}">
                <span style="float:left;margin-right:10px;padding:10px;">〜</span>
                <input name="search" type="date" style="height:30px;width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="" value="{{$search ?? ""}}">
            </div>
        </div>
        

        <!-- 2段目 -->
        <div style="width:96%;height:50px;">
            <input name="search" type="text" style="width:200px;padding:7px;border:0px;border-radius:5px 0px 0px 5px; background-color:#eeeeee;float:left;" placeholder="注文番号" value="{{$search ?? ""}}">
            <button style="float:left;border:0px;border-radius:0px 5px 5px 0px;padding:5px 10px;background-color:#555555;color:white;font-weight:bold;margin-right:20px;">検索</button>
    
            <div style="float:left;">
                <div style="width:80px;float:left;padding:5px 10px;border:0px;border-radius:5px 0px 0px 5px;background-color:#e2e2e2;font-weight:bold;">絞り込み</div>
                <select style="float:left;border:0px;border-radius:0px 5px 5px 0px;width:200px;padding:5px 10px;background-color:#eeeeee;color:#333333;font-weight:bold;" 
                    name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
                    <option value="shop_name">種別 / 売上</option>
                </select>
            </div>
        </div>

        <!-- 3段目 -->
        <div style="width:96%;height:50px;">
            <div style="width:400px;float:left;">
                <span style="float:left;margin-right:10px;padding:5px;">テストクエストモール店</span>
                <button type="button" class="primary_btn_radius_menu" style="float:left;" onclick="showModal();">
                    手数料入力
                </button>
            </div>
            
            <div style="width:300px;float:right;height:30px;">
                <div class="wrap" style="font-size:20px;float:right;">
                    <ul>
                        <li class="cls1">＜</li>
                        <li class="cls1">1</li>
                        <li class="cls1">2</li>
                        <li class="cls1">3</li>
                        <li class="cls1">＞</li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- 各会計データ -->
        <table id="histories_table" style="width:92%;font-weight:normal;">
            <thead>
                <tr style="background-color:#f2f2f2;padding:10px;">
                    <th style="width:80px;">種別</th>
                    <th>発生日</th>
                    <th>締め日</th>
                    <th>科目</th>
                    <th>消費税</th>
                    <th>金額</th>
                    <th>SQ番号</th>
                    <th>決済ID</th>
                    <th>送信日時</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="9">
                        <div style="width:98%;background-color:#f2f2f2;color:royalblue;margin:5px 10px;padding:5px 10px;font-size:12px;">
                            注文番号：1-2305-00000000001
                        </div>
                    </td>
                </tr>

                @foreach($details1 as $detail)
                <tr>
                    <td class="td-center">
                        <div style="min-width:30px;text-align:center;background-color:{{$colors[$detail->type]}};font-size:12px;color:white;border-radius:5px;margin:20px 10px;padding:0px 2px;">
                            {{ $tags[$detail->type] }}
                        </div>
                    </td>
                    <td class="td-center">
                        {{ $detail->start_at->format('Y/m/d') }}
                    </td>
                    <td class="td-center">
                        {{ $detail->end_at->format('Y/m/d') }}
                    </td>
                    <td class="td-left">
                        {{ $subject_type[$detail->subject_type]; }}
                    </td>
                    <td class="td-center">
                        {{ $tax_type[$detail->tax_type]; }}
                    </td>
                    <td class="td-right">
                        {{ number_format($detail->price); }}
                    </td>
                    <td class="td-center">
                        {{ sprintf('%09d', $detail->sq_no); }}
                    </td>
                    <td class="td-center">
                        {{ sprintf('%06d', $detail->payment_id); }}
                    </td>
                    <td class="td-center"></td>
                </tr>
                @endforeach
                <!-- 小計 -->
                <tr>
                    <td class="td-center">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-left">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-right">
                    </td>
                    <td class="td-center"></td>
                    <td class="td-left">
                        <span style="font-weight:bold;font-size:17px;">小計</span>
                    </td>
                    <td class="td-right">¥{{ number_format("6690") }}</td>
                </tr>
                <tr>
                    <td class="td-center">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-left">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-right">
                    </td>
                    <td class="td-center"></td>
                    <td class="td-left">
                        <span style="font-weight:bold;font-size:17px;">消費税</span>
                    </td>
                    <td class="td-right">¥{{ number_format("440") }}</td>
                </tr>
                <tr>
                    <td class="td-center">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-left">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-right">
                    </td>
                    <td class="td-center">
                    </td>
                    <td class="td-left">
                        <span style="font-weight:bold;font-size:17px;">合計</span>
                    </td>
                    <td class="td-right">¥{{ number_format("6930") }}</td>
                </tr>

                {{-- @endforeach --}}

                <tr>
                    <td colspan="9">
                        <div style="width:98%;background-color:#f2f2f2;margin:5px 10px;padding:5px 10px;font-size:12px;">
                            月次手数料
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td-center">
                        <div style="min-width:30px;text-align:center;background-color:A06EBF;font-size:12px;color:white;border-radius:5px;margin:20px 10px;padding:0px 2px;">
                            その他
                        </div>
                    </td>
                    <td class="td-center">
                        2023-04-28
                    </td>
                    <td class="td-center">
                        2023-04-28
                    </td>
                    <td class="td-left">
                        マイナス繰越金
                    </td>
                    <td class="td-center">
                        非課税
                    </td>
                    <td class="td-right">
                        {{ number_format("24661") }}
                    </td>
                    <td class="td-center">000000001</td>
                    <td class="td-center"></td>
                    <td class="td-center"></td>
                </tr>


                <tr>
                    <td colspan="9">
                        <div style="width:98%;background-color:#f2f2f2;margin:5px 10px;padding:5px 10px;font-size:12px;">
                            手入力項目
                        </div>
                    </td>
                </tr>
                {{-- @foreach($headers as $header) --}}
                <tr>
                    <td class="td-center">
                        <div style="min-width:30px;text-align:center;background-color:FF7790;font-size:12px;color:white;border-radius:5px;margin:20px 10px;padding:0px 2px;">
                            手数料
                        </div>
                    </td>
                    <td class="td-center">
                        2023-05-04
                    </td>
                    <td class="td-center">
                        2023-05-04
                    </td>
                    <td class="td-left">
                        その他販促協力金
                    </td>
                    <td class="td-center">
                        10%
                    </td>
                    <td class="td-right">
                        {{ number_format("1500") }}
                    </td>
                    <td class="td-center">000000001</td>
                    <td class="td-center"></td>
                    <td class="td-center"></td>
                </tr>
                <tr>
                    <td class="td-center">
                        <div style="min-width:30px;text-align:center;background-color:FF7790;font-size:12px;color:white;border-radius:5px;margin:20px 10px;padding:0px 2px;">
                            手数料
                        </div>
                    </td>
                    <td class="td-center">
                        2023-05-04
                    </td>
                    <td class="td-center">
                        2023-05-04
                    </td>
                    <td class="td-left">
                        イベント用WAONポイント負担金
                    </td>
                    <td class="td-center">
                        10%
                    </td>
                    <td class="td-right">
                        {{ number_format("2500") }}
                    </td>
                    <td class="td-center">000000002</td>
                    <td class="td-center"></td>
                    <td class="td-center"></td>
                </tr>
                <tr>
                    <td class="td-center">
                        <div style="min-width:30px;text-align:center;background-color:FF7790;font-size:12px;color:white;border-radius:5px;margin:20px 10px;padding:0px 2px;">
                            手数料
                        </div>
                    </td>
                    <td class="td-center">
                        2023-05-04
                    </td>
                    <td class="td-center">
                        2023-05-04
                    </td>
                    <td class="td-left">
                        クーポン券負担金
                    </td>
                    <td class="td-center">
                        10%
                    </td>
                    <td class="td-right">
                        {{ number_format("3500") }}
                    </td>
                    <td class="td-center">000000003</td>
                    <td class="td-center"></td>
                    <td class="td-center"></td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</form>
@endsection
@section("script")
<script>
    function showModal() {
        $('#password_modal').modal({
            centered: false
        }).modal('show');
    }

    function showConfirmModal() {
        $('#confirm_modal').modal({
            centered: false
        }).modal('show');
    }

    function copyConfirm() {

    }

    function closeModal() {
        $('#password_modal').modal('hide');
    }

    function closeConfirmModal() {
        $('#confirm_modal').modal('hide');
    }
</script>
@endsection
