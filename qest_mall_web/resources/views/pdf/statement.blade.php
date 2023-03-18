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
            border-collapse: collapse;
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
        .bill-invoice > h2 {
            margin-top: 11px;
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
            <p>発行日：{{ $header['issue_date'] }}</p>
            <p>注文番号：{{ $header['order_number'] }}</p>
        </div>
    </header>
    <main class="cf">
        <h1>{{ $title }}</h1>

        {{-- 利用明細 START --}}
        <div class="bill-usage-detail cf">
            <h2>利用明細</h2>
            <div class="bill-usage-detail__left">
                <p>注文番号：{{ $details['order_number'] }}</p>
                <p>お支払い方法：{{ $details['payment_method'] }}</p>
            </div>
            <div class="bill-usage-detail__right">
                <p>購入日：{{ $details['purchase_date'] }}</p>
                <p>発送日：{{ $details['shipping_date'] }}</p>
            </div>
        </div>
        {{-- 利用明細 END --}}

        {{-- 商品明細 START --}}
        <div class="bill-item-detail cf" <?php if (count($items) >= 20 || ($returned['is_returned'] && count($items) >= 16)) : ?>style="page-break-after: always;"<?php endif; ?>>
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
                    <?php foreach ($items as $item): ?>
                    <tr>
                        <td class="td--name tal"><?php echo $item['name']; ?></td>
                        <td class="td--num tac"><?php echo $item['quantity']; ?></td>
                        <td class="td--uprice tar"><?php echo number_format($item['price']); ?>円</td>
                        <td class="td--tax tac"><?php echo $item['tax_rate'] * 100; ?>%</td>
                        <td class="td--price tar"><?php echo number_format($item['subtotal']); ?>円</td>
                    </tr>
                    <?php endforeach; ?>
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
                        <span class="bill-invoice__value">{{ number_format($invoice['subtotal']) }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">送料(税込)</span>
                        <span class="bill-invoice__value">{{ number_format($invoice['shipping_fee']) }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">割引額(クーポン利用)</span>
                        <span class="bill-invoice__value">-{{ number_format($invoice['discount_amount']) }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">WAON POINT利用</span>
                        <span class="bill-invoice__value">{{ number_format($invoice['used_points']) }}P</span>
                    </p>
                </div>
                <hr>
                <div class="bill-invoice-sum">
                    <p>
                        <span class="bill-invoice__key">お支払い金額</span>
                        <span class="bill-invoice__value">{{ number_format($invoice['total_amount']) }}円</span>
                    </p>
                </div>

                <?php if ($returned['is_returned']): ?>
                <h2>返品依頼分</h2>
                <div class="bill-invoice-summary">
                    <p>
                        <span class="bill-invoice__key">商品小計差額(税込)</span>
                        <span class="bill-invoice__value">{{ number_format($returned['subtotal']) }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">送料差額(税込)</span>
                        <span class="bill-invoice__value">{{ number_format($returned['shipping_fee']) }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">割引額(クーポン利用)</span>
                        <span class="bill-invoice__value">{{ number_format($returned['discount_amount']) }}円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">WAON POINT利用差額</span>
                        <span class="bill-invoice__value">{{ number_format($returned['used_points']) }}P</span>
                    </p>
                </div>
                <hr>
                <div class="bill-invoice-sum">
                    <p>
                        <span class="bill-invoice__key">お支払い金額</span>
                        <span class="bill-invoice__value">{{ number_format($returned['total_amount']) }}円</span>
                    </p>
                </div>
                <?php endif; ?>

                <?php if ($subtotal_with_tax['8per'] > 0 && $subtotal_with_tax['10per'] > 0): ?>
                 <div class="bill-invoice-tax">
                    <p>
                        <span class="bill-invoice__key">8%対象(税込)</span>
                        <span class="bill-invoice__value"><?= number_format($subtotal_with_tax['8per']) ?>円</span>
                    </p>
                    <p>
                        <span class="bill-invoice__key">10%対象(税込)</span>
                        <span class="bill-invoice__value"><?= number_format($subtotal_with_tax['10per']) ?>円</span>
                    </p>
                </div>
                <hr>
                <?php endif; ?>
            </div>
        </div>
        {{-- 請求情報 END --}}

        {{-- ショップ情報 START --}}
        <div class="bill-shop cf">
            <h2>ショップ情報</h2>
            <div class="bill-shop__row cf">
                <p class="bill-shop__shop">ショップ名：{{ $shop_info['shop_name'] }}</p>
                <p class="bill-shop__sales">販売責任者：{{ $shop_info['sales_person'] }}</p>
            </div>
            <div class="bill-shop__row cf">
                <p class="bill-shop__phone">電話番号：{{  $shop_info['phone_number'] }}</p>
                <p class="bill-shop__address">住所：{{ $shop_info['address'] }}</p>
            </div>
        </div>
        {{-- ショップ情報 END --}}

        {{-- 配送情報 START --}}
        <div class="bill-shipping cf">
            <h2>配送情報</h2>
            <p class="bill-shipping__delivery">配送方法：{{ $delivery_info['delivery_method'] }}</p>
            <p class="bill-shipping__address">お届け先住所：{{ $delivery_info['shipping_address'] }}</p>
        </div>
        {{-- 配送情報 END --}}
    </main>
</body>
</html>
{{-- HTML出力したい場合はコメントアウト外す(localhost:ポート番号/statement.html) --}}
{{-- @php
    $out = ob_get_contents();
    ob_end_flush();
    file_put_contents('statement.html', $out);
@endphp --}}
