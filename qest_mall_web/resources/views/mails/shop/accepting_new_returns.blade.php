<p>
    いつもQest&nbsp;mallをご利用いただき誠にありがとうございます。<br>
    お客様からご注文商品の返品リクエストがありました。<br>
    <br>
    返品詳細<br>
    ---------------------------------------------------<br>
    {{ $user_name }}様<br>
    <br>
    ご連絡先:&nbsp;{{ $user_mail }}<br>
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
    内容を確認いただき、お客様へ返品可否のご連絡をお願いいたします。<br>
    ご連絡の遅れは、お客様からのクレームにつながる場合があります。<br>
    速やかにご対応ください。<br>
</p>
