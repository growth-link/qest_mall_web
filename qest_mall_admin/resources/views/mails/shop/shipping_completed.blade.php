<p>
    いつもQest&nbsp;mallをご利用いただき、ありがとうございます。<br>
    商品発送完了のご案内をお客様にお送りいたしました。<br>
    <br>
    ご注文詳細<br>
    ---------------------------------------------------<br>
    {{ $user_name }}<br>
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
    伝票番号:&nbsp;{{ $slip_number }}<br>
    お問い合わせ送り状:&nbsp;No.{{ $inquiry_invoice }}<br>
    注文番号:&nbsp;{{ $order_number }}<br>
    <br>
    --------------------------------------------------<br>
    ご注文詳細は<a href="{{ $url }}">こちら</a>からもご確認いただけます。<br>
    何かご不明な点がございましたら、Qest&nbsp;mallカスタマーサポートまでお問い合わせください。<br>
    よろしくお願いいたします。<br>
</p>
