<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

// トップ
Breadcrumbs::for('top', function ($trail) {
    $trail->push('トップ', route('top'));
});

// カテゴリ一覧
Breadcrumbs::for('categories' ,function($trail){
    $trail->parent('top');
    $trail->push('カテゴリ一覧', route('categories'));
});

// 商品一覧(キーワード検索)
Breadcrumbs::for('item_keyword' ,function($trail, $keyword){
    $trail->parent('top');
    $trail->push($keyword, route('item_keyword'));
});

// 商品一覧(フラグカテゴリ検索)
Breadcrumbs::for('frag_category' ,function($trail){
    $trail->parent('top');
    $trail->push('商品一覧(フラグカテゴリ検索)', route('frag_category'));
});

// 商品一覧(カテゴリ検索)
Breadcrumbs::for('category' ,function($trail){
    $trail->parent('top');
    $trail->push('商品一覧(カテゴリ検索)', route('category'));
});

// 商品一覧(ブランド検索)
Breadcrumbs::for('brand' ,function($trail){
    $trail->parent('top');
    $trail->push('ブランド別', route('brand'));
});

// 商品一覧(ショップ)
Breadcrumbs::for('shop' ,function($trail){
    $trail->parent('top');
    $trail->push('ショップ別', route('shop'));
});

// 商品検索(絞り込み)
Breadcrumbs::for('items_filter' ,function($trail){
    $trail->parent('top');
    $trail->push('商品検索(絞り込み)', route('items_filter'));
});

// 商品詳細
Breadcrumbs::for('items_detail' ,function($trail){
    $trail->parent('top');
    $trail->push('商品詳細', route('items_detail'));
});

// ショップ一覧
Breadcrumbs::for('shops' ,function($trail){
    $trail->parent('top');
    $trail->push('ショップ一覧', route('shops'));
});

// ブランド一覧
Breadcrumbs::for('brands' ,function($trail){
    $trail->parent('top');
    $trail->push('ブランド一覧', route('brands'));
});

// ショップ・ブランド検索
Breadcrumbs::for('shop_brand_search' ,function($trail){
    $trail->parent('top');
    $trail->push('ショップ・ブランド検索', route('shop_brand_search'));
});
