@php
    ob_start();
@endphp
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
            margin: 26px 33px;
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
            font-size: 14px;
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
            border: solid #707070 1px;
            border-spacing: 0;
        }
        table > thead {
            height: 29px;
        }
        table > tbody {
            height: 29px;
        }
        table th {
            height: 29px;
            background-color: #eaeaea;
            border-right: solid #707070 2px;
            box-sizing: border-box;
            font-weight: bold;
        }
        table td {
            height: 27px;
            border-top: solid #707070 2px;
            border-right: solid #707070 2px;
            box-sizing: border-box;
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
        }
        .bill-header__right > p {
            margin-top: 3px;
            text-align: left;
        }
        .bill-usage-detail {
            margin-top: 34px;
        }
        .bill-usage-detail p {
            margin-top: 3px;
        }
        .bill-usage-detail__left {
            float: left;
            width: 271px;
        }
        .bill-usage-detail__right {
            float: left;
        }
        .bill-item-detail {
            margin-top: 21px;
        }
        .bill-item-detail > table {
            margin-top: 9px;
        }
        .th--name {
            width: 240px;
            padding-left: 14px;
        }
        .th--num {
            width: 48px;
        }
        .th--uprice {
            width: 76px;
        }
        .th--tax {
            width: 49px;
        }
        .th--price {
            width: 116px;
            border-right: solid #707070 1px;
        }
        .td--name {
            width: 240px;
            padding-left: 14px;
        }
        .td--num {
            width: 48px;
        }
        .td--uprice {
            width: 76px;
            padding-right: 10px;
        }
        .td--tax {
            width: 49px;
        }
        .td--price {
            width: 116px;
            padding-right: 10px;
            border-right: solid #707070 1px;
        }
        .bill-invoice {
            float: right;
            width: 241px;
            margin-top: 13px;
        }
        .bill-invoice > hr {
            margin-top: 9px;
            border: none;
            border-bottom: solid #707070 1px;
        }
        .bill-invoice__key {
            float: left;
        }
        .bill-invoice__value {
            float: right;
        }
        .bill-invoice-summary > p {
            margin-top: 5px;
        }
        .bill-invoice-sum {
            margin-top: 8px;
        }
        .bill-invoice-sum > p {
            font-size: 10px;
            font-weight: bold;
        }
        .bill-invoice-tax {
            margin-top: 10px;
        }
        .bill-invoice-tax > p {
            font-size: 7px;
            font-weight: bold;
        }
        .bill-shop {
            margin-top: 19px;
        }
        .bill-shop__row > p {
            float: left;
            padding-bottom: 10px;
            border-bottom: solid #707070 1px;
        }
        .bill-shop__shop {
            width: 331px;
        }
        .bill-shop__sales {
            width: 148px;
            margin-left: 50px;
        }
        .bill-shop__phone {
            width: 148px;
        }
        .bill-shop__address {
            width: 331px;
            margin-left: 50px;
        }
        .bill-shipping {
            margin-top: 16px;
        }
        .bill-shipping > p {
            padding-bottom: 10px;
            border-bottom: solid #707070 1px;
        }
        .bill-shipping__delivery {
            width: 148px;
        }
        .bill-shipping__address {

        }
    </style>
</head>
<body>
    <header>
        <div class="bill-header__left">
            <img src="{{ public_path('images/qestmall_logo.png') }}">
        </div>
        <div class="bill-header__right">
            <p>発行日：{{ $issue_date }}</p>
            <p>注文番号：{{ $order_number }}</p>
        </div>
    </header>
    <main class="cf">
        <h1>{{ $title }}</h1>

        {{-- 利用明細 START --}}
        <div class="bill-usage-detail cf">
            <h2>利用明細</h2>
            <div class="bill-usage-detail__left">
                <p>注文番号：{{ $order_number }}</p>
                <p>お支払い方法：{{ $payment_method }}</p>
            </div>
            <div class="bill-usage-detail__right">
                <p>購入日：{{ $purchase_date }}</p>
                <p>発送日：{{ $shipping_date }}</p>
            </div>
        </div>
        {{-- 利用明細 END --}}

        {{-- 商品明細 START --}}
        {{-- Todo: 商品明細が20件以上は改ページ page-break-after: always; を使用 --}}
        <div class="bill-item-detail cf">
            <h2>商品明細</h2>
            <table>
                <thead>
                    <tr>
                        <th class="th--name tal">商品名</th>
                        <th class="th--num tac">数量</th>
                        <th class="th--uprice tac">単価(税込)</th>
                        <th class="th--tax tac">税率</th>
                        <th class="th--price tac">小計(税込)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td--name tal">天然水ミネラルウォーター 500ml 1セット(6本)</td>
                        <td class="td--num tac">2</td>
                        <td class="td--uprice tar">1,100円</td>
                        <td class="td--tax tac">8%</td>
                        <td class="td--price tar">2,200円</td>
                    </tr>
                    <tr>
                        <td class="td--name tal">天然水ミネラルウォーター 500ml 1セット(6本)</td>
                        <td class="td--num tac">2</td>
                        <td class="td--uprice tar">1,100円</td>
                        <td class="td--tax tac">8%</td>
                        <td class="td--price tar">2,200円</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- 商品明細 END --}}

        {{-- 請求情報 START --}}
        <div class="cf">
            <div class="bill-invoice">
                <div class="bill-invoice-summary">
                    <p>
                        <span class="bill-invoice__key">商品小計(税込)</span>
                        <span class="bill-invoice__value">{{ $subtotal }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">送料(税込)</span>
                        <span class="bill-invoice__value">{{ $shipping_fee }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">割引額(クーポン利用)</span>
                        <span class="bill-invoice__value">{{ $discount_amount }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">WAON POINT利用</span>
                        <span class="bill-invoice__value">{{ $used_points }}円</span>
                    </p>
                </div>
                <hr>
                <div class="bill-invoice-sum">
                    <p>
                        <span class="bill-invoice__key">お支払い金額</span>
                        <span class="bill-invoice__value">{{ $total_amount }}円</span>
                    </p>
                </div>
                 <div class="bill-invoice-tax">
                    <p>
                        <span class="bill-invoice__key">8%対象(税込)</span>
                        <span class="bill-invoice__value">1,100円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">10%対象(税込)</span>
                        <span class="bill-invoice__value">4,900円</span>
                    </p>
                </div>
                <hr>
            </div>
        </div>
        {{-- 請求情報 END --}}

        {{-- ショップ情報 START --}}
        <div class="bill-shop cf">
            <h2>ショップ情報</h2>
            <div class="bill-shop__row cf">
                <p class="bill-shop__shop">ショップ名：{{ $shop_name }}</p>
                <p class="bill-shop__sales">販売責任者：{{ $sales_person }}</p>
            </div>
            <div class="bill-shop__row cf">
                <p class="bill-shop__phone">電話番号：{{  $phone_number }}</p>
                <p class="bill-shop__address">住所：{{ $address }}</p>
            </div>
        </div>
        {{-- ショップ情報 END --}}

        {{-- 配送情報 START --}}
        <div class="bill-shipping cf">
            <h2>配送情報</h2>
            <p class="bill-shipping__delivery">配送方法：{{ $delivery_method }}</p>
            <p class="bill-shipping__address">お届け先住所：{{ $shipping_address }}</p>
        </div>
        {{-- 配送情報 END --}}
    </main>
</body>
</html>
@php
    $out = ob_get_contents();
    ob_end_flush();
    file_put_contents('styled.html', $out);
@endphp
