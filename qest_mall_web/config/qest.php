<?php

return [
    'admin' => [
        'customer_limit' => 10, // 一回に取得する顧客
        'payment_history_limit' => 10, // 一回に取得する購入履歴
        'shop_limit' => 10 // 一回に取得するショップ数
    ],
    'user' => [
        'recommend_item_max' => 30 // おすすめ商品の最大値
    ]
];