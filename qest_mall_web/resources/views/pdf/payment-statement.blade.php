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
            <p>伝票No {{ $header['order_number'] }}</p>
        </div>
    </header>
    <main class="cf">
        <h1>{{ $title }}</h1>


    </main>
</body>
</html>
{{-- HTML出力したい場合はコメントアウト外す(localhost:ポート番号/statement.html) --}}
{{-- @php
    $out = ob_get_contents();
    ob_end_flush();
    file_put_contents('statement.html', $out);
@endphp --}}
