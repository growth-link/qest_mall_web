<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Brand;

class ItemController extends Controller
{
    ///////////////////////////////////////////////
    // カテゴリ一覧
    public function categories() {
        return view('user.item.pc.categories');
    }

    public function spCategories() {
        return view('user.item.sp.categories');
    }

    ///////////////////////////////////////////////
    // 商品一覧(キーワード検索)
    public function itemKeyword() {
        return view('user.item.pc.item_keyword');
    }

    public function spItemKeyword() {
        return view('user.item.sp.item_keyword');
    }

    ///////////////////////////////////////////////
    // 商品一覧(フラグカテゴリ検索)
    public function flagCategory() {
        return view('user.item.pc.frag_category');
    }

    public function spFlagCategory() {
        return view('user.item.sp.frag_category');
    }

    ///////////////////////////////////////////////
    // 商品一覧(カテゴリ検索)
    public function category(Category $category) {

        return view('user.item.pc.category', compact('category'));
    }

    public function spCategory(Category $category) {
        return view('user.item.sp.category', compact('category'));
    }

    ///////////////////////////////////////////////
    // 商品一覧(ブランド検索)
    public function brand(Brand $brand) {
        return view('user.item.pc.brand');
    }

    public function spBrand(Brand $brand) {
        return view('user.item.sp.brand');
    }

    ///////////////////////////////////////////////
    // 商品一覧(ショップ)
    public function shop(Shop $shop) {
        return view('user.item.pc.shop');
    }

    public function spShop(Shop $shop) {
        return view('user.item.sp.shop');
    }

    ///////////////////////////////////////////////
    // 商品検索(絞り込み)
    public function itemFilter() {
        return view('user.item.pc.items_filter');
    }

    public function spItemFilter() {
        return view('user.item.sp.items_filter');
    }

    ///////////////////////////////////////////////
    // 商品詳細
    public function itemDetail(Item $item) {
        return view('user.item.pc.items_detail', compact('item'));
    }

    public function spItemDetail(Item $item) {
        return view('user.item.sp.items_detail', compact('item'));
    }

    ///////////////////////////////////////////////
    // ショップ一覧
    public function shops() {
        return view('user.item.pc.shops');
    }

    public function spShops() {
        return view('user.item.sp.shops');
    }

    ///////////////////////////////////////////////
    // ブランド一覧
    public function brands() {
        return view('user.item.pc.brands');
    }

    public function spBrands() {
        return view('user.item.sp.brands');
    }

    ///////////////////////////////////////////////
    // ショップ・ブランド検索
    public function shopBrandSearch(Request $request) {
        if(isset($request->shop_brand_name)){
            // 完全一致するショップがあるか
            $shop = Shop::query()
                ->where('shop_name', $request->shop_brand_name)
                ->first();
            if(isset($shop)){
                // 商品一覧(ショップ)にリダイレクト
                return redirect()->route('shop',$shop);
            }

            // 完全一致するブランドがあるか
            $brand = Brand::query()
                ->where('brand_name', $request->shop_brand_name)
                ->first();
            if(isset($brand)){
                // 商品一覧(ショップ)にリダイレクト
                return redirect()->route('brand',$brand);
            }

            // 部分一致するショップ・ブランドがあるか
            // TODO:条件がおかしい？
            $items = Item::query()
                ->select('items.*')
                ->join('shops','items.shop_id','=','shops.id')
                ->join('brands','items.brand_id','=','brands.brand_id')
                ->where('shop_name','LIKE','%'.$request->shop_brand_name.'%')
                ->orWhere('brand_name','LIKE','%'.$request->shop_brand_name.'%')
                ->get();
            if($items->isNotEmpty()){
                // 商品一覧(キーワード検索)にリダイレクト
                return redirect()->route('item_keyword',compact('items'));
            }
        }
        // TODO:検索結果0件の時
        // TODO:検索結果0件にリダイレクト
        return redirect()->route('top');
    }

}
