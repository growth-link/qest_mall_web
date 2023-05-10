{{-- HTML出力したい場合はコメントアウト外す(1番下も) --}}
{{-- @php
    ob_start();
@endphp --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $title }}</title>
    <style>
        @font-face {
            font-family: メイリオ;
            font-style: normal;
            font-weight: normal;
            src: url('{{ storage_path('fonts/メイリオ.woff') }}') format('truetype');
        }
        @font-face {
            font-family: メイリオ;
            font-style: bold;
            font-weight: bold;
            src: url('{{ storage_path('fonts/メイリオ.woff') }}') format('truetype');
        }
        @page {
            margin: 33px;
        }

        body {
            font-family: メイリオ;
            font-size: 8px;
        }
        header {
            height: 24px;
        }
        main {
            clear: both;
            margin-top: 28px;
        }
        h1 {
            margin: 0;
            line-height: 21px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
        }
        h2 {
            margin: 0;
            font-size: 12px;
            font-weight: bold;
        }
        p {
            height: 14px;
            margin: 0;
            line-height: 14px;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        th, td {
            box-sizing: border-box;
            border: solid #707070 1px;
        }
        .cf { zoom: 1; }
        .cf:before, .cf:after { content: ""; display: table; }
        .cf:after { clear: both; }
        .tal { text-align: left; }
        .tac { text-align: center; }
        .tar { text-align: right; }
         .bill-header__left {
            float: left;
        }
        .bill-header__left > img {
            width: 88px;
            height: 20px;
        }
        .bill-header__right {
            float: right;
            padding-right: 28px;
        }
        .bill-header__right > p {
            margin-top: 3px;
            text-align: left;
        }

        .bill-main-header {
            margin-top: 31px;
        }

        /* ショップ情報 */
        .bill-main-shop {
            float: left;
            width: 238px;
            font-size: 10px;
        }
        .bill-main-shop--left {
            float: left;
            padding-top: 20px;
        }
        .bill-main-shop--left > p {
            line-height: 15px;
        }
        .bill-main-shop--right {
            float: right;
            padding-top: 24px;
        }
        .bill-main-shop > hr {
            padding-top: 57px;
            border: none;
            border-bottom: solid #707070 1px;
        }

        /* OPA会社情報 */
        .bill-main-opa {
            position: relative;
            float: right;
            width: 205px;
            margin-right: 13px;
        }
        .bill-main-opa__info {
            float: left;
            line-height: 8px;
            margin: 0;
            padding: 0;
        }
        .bill-main-opa__info > dt {
            float: left;
            margin: 0;
            padding: 0;
        }
        .bill-main-opa__info > dd {
            margin: 0;
            padding: 0;
            margin-left: 34px;
        }
        .bill-main-opa__seal {
            position: absolute;
            right: 0;
        }
        .bill-main-opa__seal > img {
            width: 54px;
            height: 54px;
        }

        .bill-header__left {
            float: left;
        }
        .bill-header__left > img {
            width: 88px;
            height: 20px;
        }
        .bill-header__right {
            float: right;
        }
        .bill-header__right > p {
            margin-top: 3px;
            text-align: left;
        }
        .bill-main-sumary {
            margin-top: 33px;
            padding-left: 14px;
            padding-right: 47px;
        }
        .bill-main-sumary__left {
            float: left;
        }
        .bill-main-sumary__right {
            float: right;
        }
        .bill-main-detail {
            width: 230px;
        }
        .bill-main-detail + .bill-main-detail {
            margin-top: 38px;
        }
        .bill-main-detail__table {
            border: none;
            border-spacing: 0;
        }
        .bill-main-detail__table th {
            height: 25px;
            padding-left: 10px;
            background-color: #eaeaea;
            font-weight: bold;
            text-align: left;
        }
        .bill-main-detail__table td {
            height: 19px;
        }
        .spanned-cell {
            width: 170px;
            padding-left: 10px;
            text-align: left;
        }
        .value-cell {
            width: 60px;
            padding-right: 10px;
            text-align: right;
        }
        .total-cell {
            width: 45px;
            padding-left: 10px;
            text-align: left;
        }
        .blank-cell {
            width: 125px;
            border: none;
        }
        .bill-main-total {
            margin-top: 33px;
        }
        .total-key-cell {
            width: 81px;
            height: 19px;
            padding-left: 10px;
            text-align: left;
        }
        .total-value-cell {
            width: 149px;
            height: 19px;
            padding-right: 10px;
            text-align: right;
        }
        .sum-key-cell {
            width: 82px;
            height: 37px;
            padding-left: 10px;
            font-size: 10px;
            font-weight: bold;
            text-align: left;
        }
        .sum-value-cell {
            width: 150px;
            height: 37px;
            padding-right: 10px;
            font-size: 10px;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>
<body>
    <header>
        <div class="bill-header__left">
            <img src="{{ public_path('images/qestmall_logo.png') }}">
        </div>
        <div class="bill-header__right">
            <p>発行日：{{ $header['issue_date'] }}</p>
            <p>伝票No {{ $header['order_number'] }}</p>
        </div>
    </header>
    <main class="cf">
        <h1>{{ $title }}</h1>

        <div class="bill-main-header cf">

            {{-- ショップ情報 START --}}
            <div class="bill-main-shop cf">
                <div class="bill-main-shop--left">
                    <p>{{ $shop['company_name'] }}</p>
                    <p>{{ $shop['shop_name'] }}</p>
                </div>
                <div class="bill-main-shop--right">
                    <p>御中</p>
                </div>
                <hr>
            </div>
            {{-- ショップ情報 END --}}

            {{-- OPA会社情報 START --}}
            <div class="bill-main-opa cf">
                <dl class="bill-main-opa__info cf">
                    <dt>会社名：</dt>
                    <dd> {{ $opa['company_name'] }}</dd>
                    <dt>住所：</dt>
                    <dd> {{ $opa['zip_code'] }}<br> {{ $opa['address'] }}<br> {{ $opa['apartment_name'] }}</dd>
                    <dt>TEL：</dt>
                    <dd> {{ $opa['phone_number'] }}</dd>
                </dl>
                <div class="bill-main-opa__seal">
                    <img src="{{ public_path('images/opa_seal.png') }}">
                </div>
            </div>
            {{-- OPA会社情報 END --}}

        </div>

        <div class="bill-main-sumary cf">

            {{-- 売上高・決済種別内訳 START --}}
            <div class="bill-main-sumary__left cf">

                {{-- 売上高 START --}}
                <div class="bill-main-detail">
                    <table class="bill-main-detail__table">
                        <thead>
                            <tr>
                                <th colspan="3">売上高</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="spanned-cell">商品代金(10%)</td>
                                <td class="value-cell">&yen;{{ number_format($sales['product_price_10_percent']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">商品代金(8%)</td>
                                <td class="value-cell">&yen;{{ number_format($sales['product_price_8_percent']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">配送料</td>
                                <td class="value-cell">&yen;{{ number_format($sales['shipping_fee']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">ラッピング包装代</td>
                                <td class="value-cell">&yen;{{ number_format($sales['wrapping_packaging_fee']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">オプション</td>
                                <td class="value-cell">&yen;{{ number_format($sales['options_fee']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">小計</td>
                                <td class="value-cell">&yen;{{ number_format($sales['subtotal']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">消費税(10%)</td>
                                <td class="value-cell">&yen;{{ number_format($sales['tax_amount_10_percent']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">消費税(8%)</td>
                                <td class="value-cell">&yen;{{ number_format($sales['tax_amount_8_percent']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">合計</td>
                                <td class="value-cell">&yen;{{ number_format($sales['total']) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- 売上高 END --}}

                {{-- 決済種別内訳 START --}}
                <div class="bill-main-detail cf">
                    <table class="bill-main-detail__table">
                        <thead>
                            <tr>
                                <th colspan="3">決済種別内訳</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="spanned-cell">イオンカード決済金額</td>
                                <td class="value-cell">&yen;{{ number_format($payment_type['aeon_card']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">その他カード決済金額</td>
                                <td class="value-cell">&yen;{{ number_format($payment_type['other_card']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">WAONポイント利用金額</td>
                                <td class="value-cell">&yen;{{ number_format($payment_type['point']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">クーポン</td>
                                <td class="value-cell">&yen;{{ number_format($payment_type['coupon']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">合計</td>
                                <td class="value-cell">&yen;{{ number_format($payment_type['total']) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- 決済種別内訳 END --}}

            </div>
            {{-- 売上高・決済種別内訳 END --}}

            {{-- 手数料・合計 START --}}
            <div class="bill-main-sumary__right cf">

                {{-- 手数料 START --}}
                <div class="bill-main-detail">
                    <table class="bill-main-detail__table">
                        <thead>
                            <tr>
                                <th colspan="3">手数料</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="spanned-cell">販売営業料</td>
                                <td class="value-cell">&yen;{{ number_format($commission['sales_commission']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">システム手数料</td>
                                <td class="value-cell">&yen;{{ number_format($commission['system_fee']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">販促費</td>
                                <td class="value-cell">&yen;{{ number_format($commission['promotion_cost']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">イオンカード手数料</td>
                                <td class="value-cell">&yen;{{ number_format($commission['ion_card_fee']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">その他クレジットカード手数料</td>
                                <td class="value-cell">&yen;{{ number_format($commission['other_credit_card_fee']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">WAONPOINT手数料</td>
                                <td class="value-cell">&yen;{{ number_format($commission['point_fee']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">クーポン負担金</td>
                                <td class="value-cell">&yen;{{ number_format($commission['coupon_cost']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">イベント用WAONPOINT負担金</td>
                                <td class="value-cell">&yen;{{ number_format($commission['event_point_cost']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="spanned-cell">その他販促協力金</td>
                                <td class="value-cell">&yen;{{ number_format($commission['other_promotion_cost']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">小計</td>
                                <td class="value-cell">&yen;{{ number_format($commission['subtotal']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">消費税</td>
                                <td class="value-cell">&yen;{{ number_format($commission['tax']) }}</td>
                            </tr>
                            <tr>
                                <td class="blank-cell"></td>
                                <td class="total-cell">合計</td>
                                <td class="value-cell">&yen;{{ number_format($commission['total']) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- 手数料 END --}}

                {{-- 合計 START --}}
                <div class="bill-main-total">
                    <table class="bill-main-total__table">
                        <tbody>
                            <tr>
                                <td class="total-key-cell">売上高合計</td>
                                <td class="total-value-cell">&yen;{{ number_format($total['sales']) }}</td>
                            </tr>
                            <tr>
                                <td class="total-key-cell">手数料合計</td>
                                <td class="total-value-cell">&yen;{{ number_format($total['commission']) }}</td>
                            </tr>
                            <tr>
                                <td class="sum-key-cell">お支払い金額</td>
                                <td class="sum-value-cell">&yen;{{ number_format($total['payment_amount']) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- 合計 END --}}

            </div>
            {{-- 手数料・合計 END --}}

        </div>

    </main>
</body>
</html>
{{-- HTML出力したい場合はコメントアウト外す(localhost:ポート番号/statement.html) --}}
{{-- @php
    $out = ob_get_contents();
    ob_end_flush();
    file_put_contents('payment-statement.html', $out);
@endphp --}}