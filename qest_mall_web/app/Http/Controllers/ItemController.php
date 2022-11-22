<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    ///////////////////////////////////////////////
    // カテゴリ一覧
    public function categories() {
        return view("user/item/categories");
    }

    public function spCategories() {
        return view("user/item/categories_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(キーワード検索)
    public function itemKeyword() {
        return view("user/item/item_keyword");
    }

    public function spItemKeyword() {
        return view("user/item/item_keyword_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(フラグカテゴリ検索)
    public function flagCategory() {
        return view("user/item/frag_category");
    }

    public function spFlagCategory() {
        return view("user/item/frag_category_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(カテゴリ検索)
    public function category() {
        return view("user/item/category");
    }

    public function spCategory() {
        return view("user/item/category_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(ブランド検索)
    public function brand() {
        return view("user/item/brand");
    }

    public function spBrand() {
        return view("user/item/brand_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(ショップ)
    public function shop() {
        return view("user/items/shop");
    }

    public function spShop() {
        return view("user/items/shop_sp");
    }

    ///////////////////////////////////////////////
    // 商品詳細
    public function itemDetail() {
        return view("user/items/detail");
    }

    public function spItemDetail() {
        return view("user/items/detail_sp");
    }
    
}
