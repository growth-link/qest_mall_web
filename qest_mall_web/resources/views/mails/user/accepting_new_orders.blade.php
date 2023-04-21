<p>
    {{ $user_name }}様<br>
    <br>
    この度はQest&nbsp;mallをご利用いただき、誠にありがとうございます。<br>
    お客様のご注文を承りました。<br>
    <br>
    ご注文詳細<br>
    ---------------------------------------------------<br>
    {{ $shop_name }}<br>
    <br>
    注文日時:&nbsp;{{ $order_date }}<br>
    注文商品:&nbsp;{{ $order_item_name }}&nbsp;{{ $quantity }}個<br>
    支払金額:&nbsp;{{ $payment }}<br>
    お届け先:&nbsp;
    {{ substr($zip_code, 0, 3) }}-{{ substr($zip_code, 3, 4) }}&nbsp;
    {{ $prefecture_full_name }}&nbsp;
    {{ $city }}&nbsp;
    {{ $address }}&nbsp;
    {{ $building }}<br>
    注文番号:&nbsp;{{ $order_number }}<br>
    <br>
    <br>
    お問い合わせ先<br>
    {{ $shop_mail }}<br>
    ---------------------------------------------------<br>
    ご注文詳細につきましては<a href="{{ $url }}">こちら</a>からもご確認いただけます。<br>
    <br>
    *本メールは商品のご用意を確約するものではありません。<br>
    ご注文が成立した時点で再度注文確定のご案内をお送りいたしますのでしばらくお待ちください。<br>
</p>
