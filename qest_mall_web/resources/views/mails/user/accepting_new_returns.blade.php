<p>
    {{ $user_name }}様<br>
    <br>
    いつもQest&nbsp;mallをご利用いただき、誠にありがとうございます。<br>
    ご注文商品の返品リクエストを受け付けました。<br>
    <br>
    返品詳細<br>
    ---------------------------------------------------<br>
    {{ $shop_name }}<br>
    <br>
    申請日時:&nbsp;{{ $return_application_date }}<br>
    返品商品:&nbsp;{{ $return_item_name }}&nbsp;{{ $quantity }}個<br>
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
    <br>
    リクエスト内容の確認後、ご登録のメールアドレス宛に改めてショップよりご連絡を差し上げます。<br>
    恐れ入りますが、しばらくお待ちください。<br>
    <br>
    {{ $shop_name }}<br>
    {{ $shop_mail }}<br>
    <br>
    こちらのメールはお客様の返品リクエストを確約するものではありません。<br>
    ショップ,商品によっては返品・交換対応等できかねる場合もございますのであらかじめご了承ください。<br>
</p>
