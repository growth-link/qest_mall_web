<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Brand;
use Illuminate\Support\Facades\Log;

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
        $category_ids = $request->category_ids; //複数カテゴリ
        $life_scene_ids = $request->life_scene_ids;
        $tag_ids = $request->tag_ids;
        $start_price = $request->start_price;
        $end_price = $request->end_price;
        $is_postage_free = $request->is_postage_free;
        $is_coupon = $request->is_coupon;
        $including_out_of_stock = $request->including_out_of_stock;
        $exclude_keyword = $request->exclude_keyword;

        \DB::enableQueryLog();
        $items = Item::query()
            ->select('items.*')
            ->sortItem($sort)
            ->searchKeyword($keyword)
            ->searchCategoryHP($category_ids) //複数カテゴリ検索
            ->searchFlagCategory($life_scene_ids)
            ->searchTag($tag_ids)
            ->searchStartPrice($start_price)
            ->searchEndPrice($end_price)
            ->searchIsPostageFree($is_postage_free)
            ->searchIsCoupon($is_coupon)
            ->searchIncludingOutOfStock($including_out_of_stock)
            ->searchKeyword($exclude_keyword, 'NOT LIKE')
            ->latest()
            ->paginate(60);
        Log::Info(\DB::getQueryLog());

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
            'category_ids',
            'life_scene_ids',
            'tag_ids',
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
        $life_scene_ids = $request->life_scene_ids;
        $tag_ids = $request->tag_ids;
        $start_price = $request->start_price;
        $end_price = $request->end_price;
        $is_postage_free = $request->is_postage_free;
        $is_coupon = $request->is_coupon;
        $including_out_of_stock = $request->including_out_of_stock;
        $exclude_keyword = $request->exclude_keyword;

        // 絞り込みモーダルに表示する名前を項目ごとに取得する
        $category = Category::find($category_id);
        $life_scene_names = implode(',',SubCategory::whereIn('id', explode(',', $life_scene_ids))
            ->pluck('sub_category_name')->toArray());
        $tag_names = implode(',', Tag::whereIn('id', explode(',', $tag_ids))
            ->pluck('tag_name')->toArray());

        // 商品検索
        \DB::enableQueryLog();
        $items = Item::query()
            ->select('items.*')
            ->sortItem($sort)
            ->searchKeyword($keyword)
            ->searchCategorySP($category_id, $category) //カテゴリ1件のみ検索
            ->searchFlagCategory($life_scene_ids)
            ->searchTag($tag_ids)
            ->searchStartPrice($start_price)
            ->searchEndPrice($end_price)
            ->searchIsPostageFree($is_postage_free)
            ->searchIsCoupon($is_coupon)
            ->searchIncludingOutOfStock($including_out_of_stock)
            ->searchKeyword($exclude_keyword, 'NOT LIKE')
            ->latest()
            ->paginate(60);
        Log::Info(\DB::getQueryLog());

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
            'life_scene_ids',
            'life_scene_names',
            'tag_ids',
            'tag_names',
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
        $items = Item::query()
            ->select('items.*')
            ->searchFlagCategory($sub_category->id)->latest()->paginate(60);

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
        $items = Item::query()
            ->select('items.*')
            ->searchFlagCategory($sub_category->id)->latest()->paginate(60);

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
        $items = Item::query()
            ->select('items.*')
            ->searchCategorySP($id, $category)->latest()->paginate(60);

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
        $items = Item::query()
            ->select('items.*')
            ->searchCategorySP($id, $category)->latest()->paginate(60);

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
        $items = Item::query()
            ->select('items.*')
            ->searchBrand($brand->id)->latest()->paginate(60);

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
        $items = Item::query()
            ->select('items.*')
            ->searchBrand($brand->id)->latest()->paginate(60);

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
        $items = Item::query()
            ->select('items.*')
            ->searchShop($shop->id)->latest()->paginate(60);

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
        $items = Item::query()
            ->select('items.*')
            ->searchShop($shop->id)->latest()->paginate(60);

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
        $shops = Shop::orderBy('shop_name')->get();
        return view('user.item.pc.shops', compact('shops'));
    }

    public function spShops() {
        $shops = Shop::orderBy('shop_name')->get();
        return view('user.item.sp.shops', compact('shops'));
    }

    ///////////////////////////////////////////////
    // ブランド一覧
    public function brands() {
        $indexes = range('A','Z');
        $indexes[] = 'その他';
        $brands = Brand::orderBy('brand_name')->get();

        $brands_array = array();
        // 各アルファベットをキーとする連想配列を作成する
        foreach($indexes as $index){
            if($index != 'その他'){
                $brands_array[$index] = $brands->filter(function ($brand) use ($index) {
                    $lower_index = strtolower($index);
                    return str_starts_with($brand->brand_name, $index) !== false || str_starts_with($brand->brand_name, $lower_index) !== false;
                });
            } else {
                $collapsed = collect($brands_array)->collapse();
                $others = $brands->diff($collapsed); //その他を取得
                $brands_array[$index] = $others;
            }
        }

        return view('user.item.pc.brands', compact('brands_array'));
    }

    public function spBrands() {
        $indexes = range('A','Z');
        $indexes[] = 'その他';
        $brands = Brand::orderBy('brand_name')->get();

        $brands_array = array();
        // 各アルファベットをキーとする連想配列を作成する
        foreach($indexes as $index){
            if($index != 'その他'){
                $brands_array[$index] = $brands->filter(function ($brand) use ($index) {
                    $lower_index = strtolower($index);
                    return str_starts_with($brand->brand_name, $index) !== false || str_starts_with($brand->brand_name, $lower_index) !== false;
                });
            } else {
                $collapsed = collect($brands_array)->collapse();
                $others = $brands->diff($collapsed); //その他を取得
                $brands_array[$index] = $others;
            }
        }

        return view('user.item.sp.brands', compact('brands_array'));
    }

    ///////////////////////////////////////////////
    // ショップ・ブランド検索
    public function shopBrandSearch(Request $request) {
        $items = collect();
        $keyword = $request->shop_brand_name;

        if(isset($keyword)){
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
                // 商品一覧(ブランド)にリダイレクト
                return redirect()->route('brand',$brand);
            }

            // ブランド・ショップ名で部分一致検索
            $items = Item::query()
                ->select('items.*')
                ->searchBrandShopPartialMatch($keyword)
                ->latest()
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.pc.item_keyword')->with([
            'items' => $items,
            'sort' => null,
            'keyword' => $keyword,
            'category_ids' => null,
            'life_scene_ids' => null,
            'tag_ids' => null,
            'start_price' => null,
            'end_price' => null,
            'is_postage_free' => null,
            'is_coupon' => null,
            'including_out_of_stock' => null,
            'exclude_keyword' => null,
            'major_categories' => $major_categories,
            'sub_categories' => $sub_categories,
            'tags' => $tags,
        ]);
    }

    ///////////////////////////////////////////////
    // ショップ検索
    public function shopSearch(Request $request) {
        $items = collect();
        $keyword = $request->shop_name;

        if(isset($keyword)){
            // 完全一致するショップがあるか
            $shop = Shop::query()
                ->where('shop_name', $keyword)
                ->first();
            if(isset($shop)){
                // 商品一覧(ショップ)にリダイレクト
                return redirect()->route('shop',$shop);
            }

            // ショップ名で部分一致検索
            $items = Item::query()
                ->select('items.*')
                ->searchShopPartialMatch($keyword)
                ->latest()
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.pc.item_keyword')->with([
            'items' => $items,
            'sort' => null,
            'keyword' => $keyword,
            'category_ids' => null,
            'life_scene_ids' => null,
            'tag_ids' => null,
            'start_price' => null,
            'end_price' => null,
            'is_postage_free' => null,
            'is_coupon' => null,
            'including_out_of_stock' => null,
            'exclude_keyword' => null,
            'major_categories' => $major_categories,
            'sub_categories' => $sub_categories,
            'tags' => $tags,
        ]);
    }

    public function spShopSearch(Request $request) {
        $items = collect();
        $keyword = $request->shop_name;

        if(isset($keyword)){
            // 完全一致するショップがあるか
            $shop = Shop::query()
                ->where('shop_name', $keyword)
                ->first();
            if(isset($shop)){
                // 商品一覧(ショップ)にリダイレクト
                return redirect()->route('sp.shop',$shop);
            }

            // ショップ名で部分一致検索
            $items = Item::query()
                ->select('items.*')
                ->searchShopPartialMatch($keyword)
                ->latest()
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.sp.item_keyword')->with([
            'items' => $items,
            'sort' => null,
            'keyword' => $keyword,
            'category' => null,
            'category_ids' => null,
            'life_scene_ids' => null,
            'tag_ids' => null,
            'start_price' => null,
            'end_price' => null,
            'is_postage_free' => null,
            'is_coupon' => null,
            'including_out_of_stock' => null,
            'exclude_keyword' => null,
            'major_categories' => $major_categories,
            'sub_categories' => $sub_categories,
            'tags' => $tags,
        ]);
    }

    ///////////////////////////////////////////////
    // ブランド検索
    public function brandSearch(Request $request) {
        $items = collect();
        $keyword = $request->brand_name;

        if(isset($keyword)){
            // 完全一致するブランドがあるか
            $brand = Brand::query()
                ->where('brand_name', $keyword)
                ->first();
            if(isset($brand)){
                // 商品一覧(ブランド)にリダイレクト
                return redirect()->route('brand',$brand);
            }

            // ブランド名で部分一致検索
            $items = Item::query()
                ->select('items.*')
                ->searchBrandPartialMatch($keyword)
                ->latest()
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.pc.item_keyword')->with([
            'items' => $items,
            'sort' => null,
            'keyword' => $keyword,
            'category_ids' => null,
            'life_scene_ids' => null,
            'tag_ids' => null,
            'start_price' => null,
            'end_price' => null,
            'is_postage_free' => null,
            'is_coupon' => null,
            'including_out_of_stock' => null,
            'exclude_keyword' => null,
            'major_categories' => $major_categories,
            'sub_categories' => $sub_categories,
            'tags' => $tags,
        ]);
    }

    public function spBrandSearch(Request $request) {
        $items = collect();
        $keyword = $request->brand_name;

        if(isset($keyword)){
            // 完全一致するブランドがあるか
            $brand = Brand::query()
                ->where('brand_name', $keyword)
                ->first();
            if(isset($brand)){
                // 商品一覧(ブランド)にリダイレクト
                return redirect()->route('sp.brand',$brand);
            }

            // ブランド名で部分一致検索
            $items = Item::query()
                ->select('items.*')
                ->searchBrandPartialMatch($keyword)
                ->latest()
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.sp.item_keyword')->with([
            'items' => $items,
            'sort' => null,
            'keyword' => $keyword,
            'category_ids' => null,
            'life_scene_ids' => null,
            'tag_ids' => null,
            'start_price' => null,
            'end_price' => null,
            'is_postage_free' => null,
            'is_coupon' => null,
            'including_out_of_stock' => null,
            'exclude_keyword' => null,
            'major_categories' => $major_categories,
            'sub_categories' => $sub_categories,
            'tags' => $tags,
        ]);
    }
}
