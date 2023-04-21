<p>
    {{ $user_name }}様<br>
    <br>
    この度はQest&nbsp;mallをご利用いただき、誠にありがとうございます。<br>
    以下のご注文が{{ $shop_name }}よりキャンセルされました。<br>
    商品のご用意ができず大変申し訳ありません。<br>
    <br>
    ご注文詳細<br>
    ---------------------------------------------------<br>
    {{ $shop_name }}<br>
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
    キャンセルの理由などにつきましては、恐れ入りますが<br>
    以下よりショップに直接お問い合わせください。<br>
    <br>
    {{ $shop_name }}<br>
    {{ $shop_mail }}<br>
    <br>
    今後とも、Qest&nbsp;mallをご愛顧くださいますようよろしくお願い申し上げます。<br>
</p>
