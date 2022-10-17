<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    ///////////////////////////////////////////////
    // カテゴリ一覧
    public function categories() {
        return view("item/categories");
    }

    public function spCategories() {
        return view("item/categories_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(キーワード検索)
    public function itemKeyword() {
        return view("item/item_keyword");
    }

    public function spItemKeyword() {
        return view("item/item_keyword_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(フラグカテゴリ検索)
    public function flagCategory() {
        return view("item/frag_category");
    }

    public function spFlagCategory() {
        return view("item/frag_category_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(カテゴリ検索)
    public function category() {
        return view("item/category");
    }

    public function spCategory() {
        return view("item/category_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(ブランド検索)
    public function brand() {
        return view("item/brand");
    }

    public function spBrand() {
        return view("item/brand_sp");
    }

    ///////////////////////////////////////////////
    // 商品一覧(ショップ)
    public function shop() {
        return view("items/shop");
    }

    public function spBrand() {
        return view("items/shop_sp");
    }

    ///////////////////////////////////////////////
    // 商品詳細
    public function itemsDetail() {
        return view("items/detail");
    }

    public function spItemsDetail() {
        return view("items/detail_sp");
    }
    
}
