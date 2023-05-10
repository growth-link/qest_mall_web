<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consts\AdTypeConst;
use App\Models\TopBanner;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Shop;
use App\Models\Item;
use App\Models\Coupon;
use App\Models\Ad;
use App\Models\Tag;

class TopController extends Controller
{
    public function top(Request $request) {

        \FBAuth::createAuthAnonymous($request);

        if($request->session()->has("id_token")) {
            \FBAuth::loginAnonymous($request);
        } else {
            \FBAuth::createAuthAnonymous($request);
        }
        //\FBAuth::auth("test", "test");

        // TODO:認証テスト用コード（認証機能が出来次第削除）
        // $request->session()->put('user_id_token', 'test');
        $request->session()->forget('user_id_token');

        $recommend_by_history_items = [];
        $browsing_history_items = [];
        $recommend_items = [];

        $is_login = false;
        // ログインチェック
        if ($request->session()->has('user_id_token')) {
            // TODO:閲覧履歴からのおすすめ商品取得
            $recommend_by_history_items = Item::where('deleted_at', null)->take(10)->get();
            // TODO:閲覧商品履歴取得
            $browsing_history_items = Item::where('deleted_at', null)->take(10)->get();
            $is_login = true;
        } else {
            // TODO:おすすめ商品取得
            $recommend_items = Item::where('deleted_at', null)->take(10)->get();
            $is_login = false;
        }

        $top_banners = TopBanner::orderBy('display_order', 'asc')->get(); // トップバナー取得

        // TODO:人気商品ランキング取得
        $rank_items = Item::where('deleted_at', null)->take(10)->get();
        // TODO:人気ショップランキング取得
        $rank_shops = Shop::where('deleted_at', null)->take(10)->get();

        $latest_shops = Shop::latest()->take(10)->get(); // 新着ショップ取得
        $items = Item::latest()->take(30)->get(); // 新着商品取得
        $coupons = Coupon::all(); // クーポン取得

        // 広告取得
        $ads = [];
        foreach(AdTypeConst::LIST as $key => $item){
            $ads[$key] = Ad::where('ad_type', $key)->inRandomOrder()->first();
        }

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得

        return view('user.top.pc.top',compact(
            'recommend_items',
            'recommend_by_history_items',
            'browsing_history_items',
            'top_banners',
            'rank_items',
            'rank_shops',
            'latest_shops',
            'items',
            'coupons',
            'ads',
            'major_categories',
            'sub_categories',
            'is_login'
        ));
    }

    public function spTop(Request $request) {

        // TODO:認証テスト用コード（認証機能が出来次第削除）
        $request->session()->put('user_id_token', 'test');
        // $request->session()->forget('user_id_token');

        $recommend_by_history_items = [];
        $browsing_history_items = [];
        $recommend_items = [];

        // ログインチェック
        if ($request->session()->has('user_id_token')) {
            // TODO:閲覧履歴からのおすすめ商品取得
            $recommend_by_history_items = Item::where('deleted_at', null)->take(10)->get();
            // TODO:閲覧商品履歴取得
            $browsing_history_items = Item::where('deleted_at', null)->take(10)->get();
        } else {
            // TODO:おすすめ商品取得
            $recommend_items = Item::where('deleted_at', null)->take(10)->get();
        }

        $top_banners = TopBanner::orderBy('display_order', 'asc')->get(); // トップバナー取得

        // TODO:人気商品ランキング取得
        $rank_items = Item::where('deleted_at', null)->take(10)->get();
        // TODO:人気ショップランキング取得
        $rank_shops = Shop::where('deleted_at', null)->take(10)->get();

        $latest_shops = Shop::latest()->take(10)->get(); // 新着ショップ取得
        $items = Item::latest()->take(10)->get(); // 新着商品取得
        $coupons = Coupon::all(); // クーポン取得

        // モバイル広告取得
        $ads = [];
        $ads[AdTypeConst::MOBILE] = Ad::where('ad_type', AdTypeConst::MOBILE)->inRandomOrder()->first();

        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得

        return view('user.top.sp.top',compact(
            'recommend_items',
            'recommend_by_history_items',
            'browsing_history_items',
            'top_banners',
            'rank_items',
            'rank_shops',
            'latest_shops',
            'items',
            'coupons',
            'ads',
            'major_categories',
            'sub_categories',
            'tags'
        ));
    }
}
