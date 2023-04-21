<p>
    "いつもQest&nbsp;mallをご利用いただき、ありがとうございます。<br>
    お客様からのご注文を承りました。<br>
    <br>
    ご注文詳細<br>
    ---------------------------------------------------<br>
    {{ $user_name }}様<br>
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
    ---------------------------------------------------<br>
    ご注文詳細につきましては<a href="{{ $url }}">こちら</a>からもご確認いただけます。<br>
    商品の確保ができましたら、注文を確定し、ステータスを発送準備中に切り替えてください。<br>
</p>
