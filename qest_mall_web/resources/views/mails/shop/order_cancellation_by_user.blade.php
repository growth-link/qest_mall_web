<p>
    いつもQest&nbsp;mallをご利用いただき、ありがとうございます。<br>
    以下のご注文がお客様によりキャンセルされました。<br>
    <br>
    ご注文詳細<br>
    ---------------------------------------------------<br>
    {{ $user_name }}様<br>
    <br>
    キャンセル日時:&nbsp;{{ $cancellation_date }}<br>
    注文商品:&nbsp;{{ $order_item_name }}&nbsp;{{ $quantity }}個<br>
    お届け先:&nbsp;
    {{ substr($zip_code, 0, 3) }}-{{ substr($zip_code, 3, 4) }}&nbsp;
    {{ $prefecture_full_name }}&nbsp;
    {{ $city }}&nbsp;
    {{ $address }}&nbsp;
    {{ $building }}<br>
    注文番号:&nbsp;{{ $order_number }}<br>
    <br>
    ---------------------------------------------------<br>
    ご注文詳細は<a href="{{ $url }}">こちら</a>からもご確認いただけます。<br>
    <br>
    何かご不明な点やご質問がございましたら、Qest&nbsp;mallカスタマーサポートまでお問い合わせください。<br>
    よろしくお願いいたします。<br>
</p>
