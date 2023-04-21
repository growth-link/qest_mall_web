<p>
    "いつもQest&nbsp;mallをご利用いただき、ありがとうございます。<br>
    ご注文確定のご案内をお客様にお送りいたしました。<br>
    <br>
    ご注文詳細<br>
    ---------------------------------------------------<br>
    {{ $user_name }}様<br>
    <br>
    注文商品:&nbsp;{{ $order_item_name }}&nbsp;{{ $quantity }}個<br>
    お届け先:&nbsp;
    {{ substr($zip_code, 0, 3) }}-{{ substr($zip_code, 3, 4) }}&nbsp;
    {{ $prefecture_full_name }}&nbsp;
    {{ $city }}&nbsp;
    {{ $address }}&nbsp;
    {{ $building }}<br>
    発送日時:&nbsp;{{ $shipping_date }}<br>
    発送方法:&nbsp;{{ $shipping_method }}<br>
    注文番号:&nbsp;{{ $order_number }}<br>
    <br>
    ---------------------------------------------------<br>
    ご注文詳細につきましては<a href="{{ $url }}">こちら</a>からもご確認いただけます。<br>
    商品は7日以内に発送し、ステータスを発送済みに切り替えてください。<br>
</p>
