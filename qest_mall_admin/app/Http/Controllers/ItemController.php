<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Brand;

class ItemController extends Controller
{
    ///////////////////////////////////////////////
    // カテゴリ一覧
    public function categories() {
        $major_categoris = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        return view('user.item.pc.categories',compact('major_categoris'));
    }

    public function spCategories() {
        return view('user.item.sp.categories');
    }

    ///////////////////////////////////////////////
    // 商品一覧(キーワード検索)
    public function itemKeyword(Request $request) {
        $keyword = $request->keyword;
        $sort = $request->sort;
        $query = Item::query();

        if(isset($sort)) {
            if($sort=='recommend'){
                $query->where("deleted_at", null);
            }
            if($sort=='low_price'){
                $query->where("deleted_at", null)->orderBy('normal_price');
            }
            if($sort=='high_price'){
                $query->where("deleted_at", null)->orderBy('normal_price', 'desc');
            }
            if($sort=='start_datetime'){
                $query->where("deleted_at", null)->orderBy('start_datetime');
            }
        } else {
            $sort = null;
        }

        if(isset($keyword)){
            // 複数キーワード検索
            $space_conversion = mb_convert_kana($keyword, 's'); // 全角スペースを半角に変換
            $word_array_searched = preg_split('/[\s,]+/', $space_conversion, -1, PREG_SPLIT_NO_EMPTY); // 単語を半角スペースで区切って配列に

            $columns = ['shop_name','brand_name','name','detail_title','detail']; //検索項目

            $query->select('items.*')
            ->leftJoin('shops','items.shop_id','=','shops.id')
            ->leftJoin('brands','items.brand_id','=','brands.id');
            foreach($columns as $column) {
                $query->orWhere(function($query) use($word_array_searched,$column){
                    foreach($word_array_searched as $value) {
                        $query->where($column,'LIKE','%'.$value.'%');
                    }
                });
            }
            $items = $query->latest()->paginate(60); // 商品取得
        } else {
            $keyword = '全て';
            $items = $query->latest()->paginate(60); // 全件取得
        }

        $major_categoris = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categoris = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.item_keyword',compact(
            'items',
            'sort',
            'keyword',
            'major_categoris',
            'sub_categoris',
            'tags',
        ));
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
            $keyword = $request->shop_brand_name;
            // 完全一致するショップがあるか
            $shop = Shop::query()
                ->where('shop_name', $keyword)
                ->first();
            if(isset($shop)){
                // 商品一覧(ショップ)にリダイレクト
                return redirect()->route('shop',$shop);
            }

            // 完全一致するブランドがあるか
            $brand = Brand::query()
                ->where('brand_name', $keyword)
                ->first();
            if(isset($brand)){
                // 商品一覧(ショップ)にリダイレクト
                return redirect()->route('brand',$brand);
            }

            // 部分一致するショップ・ブランドがあるか
            $items = Item::query()
                ->select('items.*')
                ->leftJoin('shops','items.shop_id','=','shops.id')
                ->leftJoin('brands','items.brand_id','=','brands.id')
                ->orWhere('shop_name','LIKE','%'.$keyword.'%')
                ->orWhere('brand_name','LIKE','%'.$keyword.'%')
                ->get();
            if($items->isNotEmpty()){
                // 商品一覧(キーワード検索)にリダイレクト
                return redirect()->route('item_keyword',compact(
                    'items',
                    'keyword'
                ));
            }
        }
        // TODO:検索結果0件の時
        // TODO:検索結果0件にリダイレクト
        return redirect()->route('top');
    }

}
