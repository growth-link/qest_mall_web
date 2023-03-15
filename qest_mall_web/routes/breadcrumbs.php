<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

/*
|--------------------------------------------------------------------------
| PC
|--------------------------------------------------------------------------
*/

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
Breadcrumbs::for('flag_category' ,function($trail, $sub_category){
    $trail->parent('top');
    $trail->push($sub_category->sub_category_name, route('flag_category', $sub_category));
});

// 商品一覧(カテゴリ検索)
Breadcrumbs::for('category' ,function($trail, $category){
    if (isset($category->category)){
        $trail->parent('category', $category->category);
    } else {
        $trail->parent('top');
    }
    $trail->push($category->category_name, route('category', $category->id));
});

// ブランド別
Breadcrumbs::for('by_brand' ,function($trail){
    $trail->parent('top');
    $trail->push('ブランド別', route('brands'));
});

// 商品一覧(ブランド検索)
Breadcrumbs::for('brand' ,function($trail, $brand){
    $trail->parent('by_brand');
    $trail->push($brand->brand_name, route('brand', $brand));
});

// ショップ別
Breadcrumbs::for('by_shop' ,function($trail){
    $trail->parent('top');
    $trail->push('ショップ別', route('shops'));
});

// 商品一覧(ショップ)
Breadcrumbs::for('shop' ,function($trail, $shop){
    $trail->parent('by_shop');
    $trail->push($shop->shop_name, route('shop', $shop));
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

/*
|--------------------------------------------------------------------------
| SP
|--------------------------------------------------------------------------
*/

// トップ
Breadcrumbs::for('sp.top', function ($trail) {
    $trail->push('トップ', route('sp.top'));
});

// カテゴリ一覧
Breadcrumbs::for('sp.categories' ,function($trail){
    $trail->parent('sp.top');
    $trail->push('カテゴリ一覧', route('sp.categories'));
});

// 商品一覧(キーワード検索)
Breadcrumbs::for('sp.item_keyword' ,function($trail, $keyword){
    $trail->parent('sp.top');
    $trail->push($keyword, route('sp.item_keyword'));
});

// 商品一覧(フラグカテゴリ検索)
Breadcrumbs::for('sp.flag_category' ,function($trail, $sub_category){
    $trail->parent('sp.top');
    $trail->push($sub_category->sub_category_name, route('sp.flag_category', $sub_category));
});

// 商品一覧(カテゴリ検索)
Breadcrumbs::for('sp.category' ,function($trail, $category){
    if (isset($category->category)){
        $trail->parent('sp.category', $category->category);
    } else {
        $trail->parent('sp.top');
    }
    $trail->push($category->category_name, route('sp.category', $category->id));
});

// ブランド別
Breadcrumbs::for('sp.by_brand' ,function($trail){
    $trail->parent('sp.top');
    $trail->push('ブランド別', route('sp.brands'));
});

// 商品一覧(ブランド検索)
Breadcrumbs::for('sp.brand' ,function($trail, $brand){
    $trail->parent('sp.by_brand');
    $trail->push($brand->brand_name, route('sp.brand', $brand));
});

// ショップ別
Breadcrumbs::for('sp.by_shop' ,function($trail){
    $trail->parent('sp.top');
    $trail->push('ショップ別', route('sp.shops'));
});

// 商品一覧(ショップ)
Breadcrumbs::for('sp.shop' ,function($trail, $shop){
    $trail->parent('sp.by_shop');
    $trail->push($shop->shop_name, route('sp.shop', $shop));
});

// 商品詳細
Breadcrumbs::for('sp.items_detail' ,function($trail){
    $trail->parent('sp.top');
    $trail->push('商品詳細', route('sp.items_detail'));
});

// ショップ一覧
Breadcrumbs::for('sp.shops' ,function($trail){
    $trail->parent('sp.top');
    $trail->push('ショップ一覧', route('sp.shops'));
});

// ブランド一覧
Breadcrumbs::for('sp.brands' ,function($trail){
    $trail->parent('sp.top');
    $trail->push('ブランド一覧', route('sp.brands'));
});

// ショップ・ブランド検索
Breadcrumbs::for('sp.shop_brand_search' ,function($trail){
    $trail->parent('sp.top');
    $trail->push('ショップ・ブランド検索', route('sp.shop_brand_search'));
});
