<p>
    いつもQest&nbsp;mallをご利用いただき、ありがとうございます。<br>
    返品手続き完了のご案内をお客様にお送りいたしました。<br>
    <br>
    返品詳細<br>
    ---------------------------------------------------<br>
    {{ $user_name }}様<br>
    <br>
    申請日時:&nbsp;{{ $return_application_date }}<br>
    返品商品:&nbsp;{{ $order_item_name }}&nbsp;{{ $quantity }}個<br>
    お届け先:&nbsp;
    {{ substr($zip_code, 0, 3) }}-{{ substr($zip_code, 3, 4) }}&nbsp;
    {{ $prefecture_full_name }}&nbsp;
    {{ $city }}&nbsp;
    {{ $address }}&nbsp;
    {{ $building }}<br>
    注文番号:&nbsp;{{ $order_number }}<br>
    返品依頼番号:&nbsp;{{ $return_order_number }}<br>
    <br>
    ---------------------------------------------------<br>
    返品詳細は<a href="{{ $url }}">こちら</a>からもご確認いただけます。<br>
</p>
