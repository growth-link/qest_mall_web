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
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        return view('user.item.pc.categories',compact('major_categories'));
    }

    public function spCategories() {
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        return view('user.item.sp.categories',compact('major_categories'));
    }

    ///////////////////////////////////////////////
    // 商品一覧(キーワード検索)
    public function itemKeyword(Request $request) {
        $sort = $request->sort;
        $keyword = $request->keyword;
        $category_id = $request->category_id;
        $life_scene_id = $request->life_scene_id;
        $tag_id = $request->tag_id;
        $start_price = $request->start_price;
        $end_price = $request->end_price;
        $is_postage_free = $request->is_postage_free;
        $is_coupon = $request->is_coupon;
        $including_out_of_stock = $request->including_out_of_stock;
        $exclude_keyword = $request->exclude_keyword;

        $category = Category::find($category_id);
        $items = Item::sortItem($sort)
                    ->searchKeyword($keyword)
                    ->searchCategory($category_id, $category) //複数カテゴリ検索
                    ->searchFlagCategory($life_scene_id)
                    ->searchTag($tag_id)
                    ->searchStartPrice($start_price)
                    ->searchEndPrice($end_price)
                    ->searchIsPostageFree($is_postage_free)
                    ->searchIsCoupon($is_coupon)
                    ->searchIncludingOutOfStock($including_out_of_stock)
                    ->searchKeyword($exclude_keyword, 'NOT LIKE')
                    ->latest()
                    ->paginate(60);

        if(!isset($keyword)){
            $keyword = '全て';
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.item_keyword',compact(
            'items',
            'sort',
            'keyword',
            'category_id',
            'life_scene_id',
            'tag_id',
            'start_price',
            'end_price',
            'is_postage_free',
            'is_coupon',
            'including_out_of_stock',
            'exclude_keyword',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spItemKeyword(Request $request) {
        $sort = $request->sort;
        $keyword = $request->keyword;
        $category_id = $request->category_id;
        $life_scene_id = $request->life_scene_id;
        $tag_id = $request->tag_id;
        $start_price = $request->start_price;
        $end_price = $request->end_price;
        $is_postage_free = $request->is_postage_free;
        $is_coupon = $request->is_coupon;
        $including_out_of_stock = $request->including_out_of_stock;
        $exclude_keyword = $request->exclude_keyword;

        $category = Category::find($category_id);
        // TODO:配列で取得する
        $life_scene = SubCategory::find($life_scene_id);
        // TODO:配列で取得する
        $tag = Tag::find($tag_id);
        $items = Item::sortItem($sort)
                    ->searchKeyword($keyword)
                    ->searchCategory($category_id, $category) //カテゴリ1件のみ検索
                    ->searchFlagCategory($life_scene_id)
                    ->searchTag($tag_id)
                    ->searchStartPrice($start_price)
                    ->searchEndPrice($end_price)
                    ->searchIsPostageFree($is_postage_free)
                    ->searchIsCoupon($is_coupon)
                    ->searchIncludingOutOfStock($including_out_of_stock)
                    ->searchKeyword($exclude_keyword, 'NOT LIKE')
                    ->latest()
                    ->paginate(60);

        if(!isset($keyword)){
            if(!empty($category)){
                $keyword = $category->category_name;
            } else {
                $keyword = '全て';
            }
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.item_keyword',compact(
            'items',
            'sort',
            'keyword',
            'category',
            'life_scene',
            'tag_id',
            'start_price',
            'end_price',
            'is_postage_free',
            'is_coupon',
            'including_out_of_stock',
            'exclude_keyword',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(フラグカテゴリ検索)
    public function flagCategory(SubCategory $sub_category) {
        $sort = null;
        $items = Item::searchFlagCategory($sub_category->id)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.flag_category', compact(
            'items',
            'rank_items',
            'sort',
            'sub_category',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spFlagCategory(SubCategory $sub_category) {
        $sort = null;
        $items = Item::searchFlagCategory($sub_category->id)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.flag_category', compact(
            'items',
            'rank_items',
            'sort',
            'sub_category',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(カテゴリ検索)
    public function category($id) {
        $sort = null;
        $category = Category::find($id);
        $items = Item::searchCategory($id, $category)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.category', compact(
            'items',
            'rank_items',
            'sort',
            'category',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spCategory($id) {
        $sort = null;
        $category = Category::find($id);
        $items = Item::searchCategory($id, $category)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.category', compact(
            'items',
            'rank_items',
            'sort',
            'category',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(ブランド検索)
    public function brand(Brand $brand) {
        $sort = null;
        $items = Item::searchBrand($brand->id)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.brand', compact(
            'items',
            'rank_items',
            'sort',
            'brand',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spBrand(Brand $brand) {
        $sort = null;
        $items = Item::searchBrand($brand->id)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.brand', compact(
            'items',
            'rank_items',
            'sort',
            'brand',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(ショップ)
    public function shop(Shop $shop) {
        $sort = null;
        $items = Item::searchShop($shop->id)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.shop', compact(
            'items',
            'rank_items',
            'sort',
            'shop',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spShop(Shop $shop) {
        $sort = null;
        $items = Item::searchShop($shop->id)->latest()->paginate(60);

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.shop', compact(
            'items',
            'rank_items',
            'sort',
            'shop',
            'major_categories',
            'sub_categories',
            'tags',
        ));
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
