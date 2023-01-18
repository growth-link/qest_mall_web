<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    ///////////////////////////////////////////////
    // カテゴリ一覧
    public function categories() {
        return view("user.item.pc.categories");
    }

    public function spCategories() {
        return view("user.item.sp.categories");
    }

    ///////////////////////////////////////////////
    // 商品一覧(キーワード検索)
    public function itemKeyword() {
        return view("user.item.pc.item_keyword");
    }

    public function spItemKeyword() {
        return view("user.item.sp.item_keyword");
    }

    ///////////////////////////////////////////////
    // 商品一覧(フラグカテゴリ検索)
    public function flagCategory() {
        return view("user.item.pc.frag_category");
    }

    public function spFlagCategory() {
        return view("user.item.sp.frag_category");
    }

    ///////////////////////////////////////////////
    // 商品一覧(カテゴリ検索)
    public function category() {
        return view("user.item.pc.category");
    }

    public function spCategory() {
        return view("user.item.sp.category");
    }

    ///////////////////////////////////////////////
    // 商品一覧(ブランド検索)
    public function brand() {
        return view("user.item.pc.brand");
    }

    public function spBrand() {
        return view("user.item.sp.brand");
    }

    ///////////////////////////////////////////////
    // 商品一覧(ショップ)
    public function shop() {
        return view("user.items.pc.shop");
    }

    public function spShop() {
        return view("user.items.sp.shop");
    }

    ///////////////////////////////////////////////
    // 商品詳細
    public function itemDetail() {
        return view("user.items.pc.detail");
    }

    public function spItemDetail() {
        return view("user.items.sp.detail");
    }

}
