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
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.categories',compact(
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(キーワード検索)
    public function itemKeyword(Request $request) {
        $sort = $request->sort;
        $keyword = $request->keyword;
        $shop_id = $request->shop_id;
        $brand_id = $request->brand_id;
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
            ->sortItem($sort)
            ->searchKeyword($keyword)
            ->searchShop($shop_id)
            ->searchBrand($brand_id)
            ->searchCategories($category_ids) //複数カテゴリ検索
            ->searchFlagCategory($life_scene_ids)
            ->searchTag($tag_ids)
            ->searchStartPrice($start_price)
            ->searchEndPrice($end_price)
            ->searchIsPostageFree($is_postage_free)
            ->searchIsCoupon($is_coupon)
            ->searchIncludingOutOfStock($including_out_of_stock)
            ->searchKeyword($exclude_keyword, 'NOT LIKE')
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
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
            'shop_id',
            'brand_id',
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
        $shop_id = $request->shop_id;
        $brand_id = $request->brand_id;
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
            ->sortItem($sort)
            ->searchKeyword($keyword)
            ->searchShop($shop_id)
            ->searchBrand($brand_id)
            ->searchCategory($category_id, $category) //カテゴリ1件のみ検索
            ->searchFlagCategory($life_scene_ids)
            ->searchTag($tag_ids)
            ->searchStartPrice($start_price)
            ->searchEndPrice($end_price)
            ->searchIsPostageFree($is_postage_free)
            ->searchIsCoupon($is_coupon)
            ->searchIncludingOutOfStock($including_out_of_stock)
            ->searchKeyword($exclude_keyword, 'NOT LIKE')
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);
        Log::Info(\DB::getQueryLog());

        if(!isset($keyword)){
            $keyword = '全て';
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        $is_item_list = true; //メニューバーの検索モーダル不要フラグ

        return view('user.item.sp.item_keyword',compact(
            'items',
            'sort',
            'keyword',
            'shop_id',
            'brand_id',
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
            'is_item_list',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(フラグカテゴリ検索)
    public function flagCategory(SubCategory $sub_category) {
        $sort = null;
        $items = Item::query()
            ->sortItem($sort)
            ->searchFlagCategory($sub_category->id)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $life_scene_ids = $sub_category->id; //絞り込みモーダル用

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.flag_category', compact(
            'items',
            'rank_items',
            'sort',
            'life_scene_ids',
            'sub_category',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spFlagCategory(SubCategory $sub_category) {
        $sort = null;
        $items = Item::query()
            ->sortItem($sort)
            ->searchFlagCategory($sub_category->id)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $life_scene_ids = $sub_category->id; //絞り込みモーダル用

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        $is_item_list = true; //メニューバーの検索モーダル不要フラグ

        return view('user.item.sp.flag_category', compact(
            'items',
            'rank_items',
            'sort',
            'life_scene_ids',
            'sub_category',
            'major_categories',
            'sub_categories',
            'tags',
            'is_item_list',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(カテゴリ検索)
    public function category($id) {
        $sort = null;
        $category = Category::find($id);
        $items = Item::query()
            ->sortItem($sort)
            ->searchCategory($id, $category)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $category_ids = $id; //絞り込みモーダル用

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.pc.category', compact(
            'items',
            'rank_items',
            'sort',
            'category_ids',
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
            ->sortItem($sort)
            ->searchCategory($id, $category)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $category_ids = $id; //絞り込みモーダル用

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        $is_item_list = true; //メニューバーの検索モーダル不要フラグ

        return view('user.item.sp.category', compact(
            'items',
            'rank_items',
            'sort',
            'category_ids',
            'category',
            'major_categories',
            'sub_categories',
            'tags',
            'is_item_list',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(ブランド検索)
    public function brand(Brand $brand) {
        $sort = null;
        $items = Item::query()
            ->sortItem($sort)
            ->searchBrand($brand->id)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $brand_id = $brand->id;  //並べ替え用

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
            'brand_id',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spBrand(Brand $brand) {
        $sort = null;
        $items = Item::query()
            ->sortItem($sort)
            ->searchBrand($brand->id)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $brand_id = $brand->id;  //並べ替え用

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        $is_item_list = true; //メニューバーの検索モーダル不要フラグ

        return view('user.item.sp.brand', compact(
            'items',
            'rank_items',
            'sort',
            'brand',
            'brand_id',
            'major_categories',
            'sub_categories',
            'tags',
            'is_item_list',
        ));
    }

    ///////////////////////////////////////////////
    // 商品一覧(ショップ)
    public function shop(Shop $shop) {
        $sort = null;
        $items = Item::query()
            ->sortItem($sort)
            ->searchShop($shop->id)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $shop_id = $shop->id;  //並べ替え用

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
            'shop_id',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    public function spShop(Shop $shop) {
        $sort = null;
        $items = Item::query()
            ->sortItem($sort)
            ->searchShop($shop->id)
            ->searchIncludingOutOfStock()
            ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
            ->paginate(60);

        $shop_id = $shop->id;  //並べ替え用

        // TODO:人気商品ランキング取得
        $rank_items = $items->take(10);

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        $is_item_list = true; //メニューバーの検索モーダル不要フラグ

        return view('user.item.sp.shop', compact(
            'items',
            'rank_items',
            'sort',
            'shop',
            'shop_id',
            'major_categories',
            'sub_categories',
            'tags',
            'is_item_list',
        ));
    }

    ///////////////////////////////////////////////
    // 商品詳細
    public function itemDetail(Request $request) {
        // \Log::Info("====================================");
        // \Log::Info("itemDetail");
        // \Log::Info($item);


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

        return view('user.item.pc.items_detail',compact(
            'items',
            'sort',
            'keyword',
            'major_categoris',
            'sub_categoris',
            'tags',
        ));
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
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.shops', compact(
            'shops',
            'major_categories',
            'sub_categories',
            'tags',
        ));
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

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.item.sp.brands', compact(
            'brands_array',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // ショップ・ブランド検索
    public function shopBrandSearch(Request $request) {
        $items = collect();
        $keyword = $request->shop_brand_name;
        $sort = null;

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
                ->sortItem($sort)
                ->searchBrandShopPartialMatch($keyword)
                ->searchIncludingOutOfStock()
                ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.pc.item_keyword')->with([
            'items' => $items,
            'sort' => $sort,
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
        $sort = null;

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
                ->sortItem($sort)
                ->searchShopPartialMatch($keyword)
                ->searchIncludingOutOfStock()
                ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.pc.item_keyword')->with([
            'items' => $items,
            'sort' => $sort,
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
        $sort = null;

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
                ->sortItem($sort)
                ->searchShopPartialMatch($keyword)
                ->searchIncludingOutOfStock()
                ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.sp.item_keyword')->with([
            'items' => $items,
            'sort' => $sort,
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
        $sort = null;

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
                ->sortItem($sort)
                ->searchBrandPartialMatch($keyword)
                ->searchIncludingOutOfStock()
                ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.pc.item_keyword')->with([
            'items' => $items,
            'sort' => $sort,
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
        $sort = null;

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
                ->sortItem($sort)
                ->searchBrandPartialMatch($keyword)
                ->searchIncludingOutOfStock()
                ->select('items.*') //joinをしているためitemsだけを取得するよう最後に指定する
                ->paginate(60);
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        //商品一覧(キーワード検索)に遷移
        return view('user.item.sp.item_keyword')->with([
            'items' => $items,
            'sort' => $sort,
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
