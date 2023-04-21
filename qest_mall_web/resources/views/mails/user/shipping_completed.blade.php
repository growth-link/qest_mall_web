<p>
    {{ $user_name }}様<br>
    <br>
    この度はQest&nbsp;mallをご利用いただき、誠にありがとうございます。<br>
    ご注文いただいた商品の発送が完了いたしました。<br>
    <br>
    ご注文詳細<br>
    ---------------------------------------------------<br>
    {{ $shop_name }}<br>
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
    お問い合わせ先<br>
    {{ $shop_mail }}<br>
    ---------------------------------------------------<br>
    ご注文詳細につきましては<a href="{{ $url }}">こちら</a>からもご確認いただけます。<br>
    商品の到着までしばらくお待ちください。<br>
    <br>
    今後とも、Qest&nbsp;mallをご愛顧くださいますようよろしくお願い申し上げます。<br>
</p>
