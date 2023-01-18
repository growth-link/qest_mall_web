<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top() {

        // TODO:ログインチェック

        // ログイン時
        // TODO:おすすめ商品取得


        // 未ログイン時
        // TODO:閲覧履歴からのおすすめ商品取得
        // TODO:閲覧商品履歴取得


        // TODO:人気商品ランキング取得
        // TODO:人気ショップランキング取得
        // TODO:新着ショップ取得
        // TODO:新着商品取得

        // 仮データ
        $item_images = [
            "/images/item/item1.png",
            "/images/item/item2.png",
            "/images/item/item3.png",
            "/images/item/item4.png",
            "/images/item/item5.png",
            "/images/item/item1.png",
            "/images/item/item2.png",
            "/images/item/item3.png",
            "/images/item/item4.png",
            "/images/item/item5.png",
        ];
        $shop_images = [
            "/images/shop/shop_libre.png",
            "/images/shop/shop_mill_mill.png",
            "/images/shop/shop_baby_baby.png",
            "/images/shop/shop_&life.png",
            "/images/shop/shop_tennomegumi.png",
            "/images/shop/shop_libre.png",
            "/images/shop/shop_mill_mill.png",
            "/images/shop/shop_baby_baby.png",
            "/images/shop/shop_&life.png",
            "/images/shop/shop_tennomegumi.png",
        ];
        return view("user.top.pc.top",compact(
            "item_images",
            "shop_images"
        ));
    }

    public function spTop() {
        return view("user.top.sp.top");
    }
}
