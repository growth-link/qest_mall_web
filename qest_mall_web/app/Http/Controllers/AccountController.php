<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Brand;
use App\Models\ItemImage;
use Illuminate\Support\Facades\Log;

class AccountController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | アカウント PC
    |--------------------------------------------------------------------------
    */
    // 基本情報Top
    public function mypageUserInfo(Request $request) {
        $menu_type = 1;

        return view("user.my_menu.pc.user_info",compact(
            "menu_type"
        ));
    }

    // 通知設定一覧
    public function mypageNoticeSettings(Request $request) {
        return view("user.my_menu.pc.notice_settings");
    }

    // メールマガジン確認・停止(クエストモール)
    public function mypageNoticeSettingsMallMail(Request $request) {
        return view("user.my_menu.pc.mall_mail");
    }

    // メールマガジン確認・停止(ショップ)
    public function mypageNoticeSettingsShopMail(Request $request) {
        return view("user.my_menu.pc.shop_mail");
    }

    // クレジットカード登録一覧
    public function mypageCreditCards(Request $request) {
        return view("user.my_menu.pc.credit_cards");
    }

    // クレジットカード編集
    public function mypageCreditCardsEdit(Request $request) {
        return view("user.my_menu.pc.credit-cards.edit");
    }

    // 購入履歴一覧
    public function mypagePurchaseHistorys(Request $request) {
        return view("user.my_menu.pc.purchase_histories");
    }

    // 注文詳細
    public function mypagePurchaseHistorysDetail(Request $request) {
        return view("user.my_menu.pc.purchase-histories_detail");
    }

    // ご利用明細
    public function mypagePurchaseHistorysDetailUsageDetail(Request $request) {
        return view("user.my_menu.pc.purchase-histories_detail_usage");
    }

    // クーポン一覧
    public function mypageCoupons(Request $request) {
        return view("user.my_menu.pc.coupons");
    }

    // ポイント情報
    public function mypagePointInfo(Request $request) {
        return view("user.my_menu.pc.point_info");
    }

    // お気に入り
    public function mypageFavoritesItems(Request $request) {
        $items = Item::latest()->take(2)->get(); // 対象商品
        $shops = Shop::orderBy('shop_name')->get();

        return view("user.my_menu.pc.favorites_items",compact(
            "items"
        ));
    }

    // お気に入りショップ
    public function mypageFavoritesShops(Request $request) {
        return view("user.my_menu.pc.favorites_shops");
    }

    // 退会
    public function mypageQuit(Request $request) {
        return view("user.my_menu.pc.quit");
    }

    // 退会完了
    public function mypageQuitDone(Request $request) {
        return view("user.my_menu.pc.quit_done");
    }






    /*
    |--------------------------------------------------------------------------
    | アカウント SP
    |--------------------------------------------------------------------------
    */
    // 基本情報Top
    public function spMypageUserInfo(Request $request) {
        return view("user.my_menu.sp.user_info");
    }

    // 通知設定一覧
    public function spMypageNoticeSettings(Request $request) {
        return view("user.my_menu.sp.notice_settings");
    }

    // メールマガジン確認・停止(クエストモール)
    public function spMypageNoticeSettingsMallMail(Request $request) {
        return view("user.my_menu.sp.mall_mail");
    }

    // メールマガジン確認・停止(ショップ)
    public function spMypageNoticeSettingsShopMail(Request $request) {
        return view("user.my_menu.sp.shop-mail");
    }

    // クレジットカード登録一覧
    public function spMypageCreditCards(Request $request) {
        return view("user.my_menu.sp.credit-cards");
    }

    // クレジットカード編集
    public function spMypageCreditCardsEdit(Request $request) {
        return view("user.my_menu.sp.credit-cards.edit");
    }

    // 購入履歴一覧
    public function spMypagePurchaseHistorys(Request $request) {
        return view("user.my_menu.sp.purchase_histories");
    }

    // 注文詳細
    public function spMypagePurchaseHistorysDetail(Request $request) {
        return view("user.my_menu.pc.purchase_histories_detail");
    }

    // ご利用明細
    public function spMypagePurchaseHistorysDetailUsageDetail(Request $request) {
        return view("user.my_menu.sp.purchase_histories_detail_usage");
    }

    // クーポン一覧
    public function spMypageCoupons(Request $request) {
        return view("user.my_menu.sp.coupons");
    }

    // ポイント情報
    public function spMypagePointInfo(Request $request) {
        return view("user.my_menu.sp.point-info");
    }

    // お気に入り
    public function spMypageFavouritesItems(Request $request) {
        return view("user.my_menu.sp.favorites_items");
    }

    // お気に入りショップ
    public function spMypageFavouritesShops(Request $request) {
        return view("user.my_menu.sp.favorites_shops");
    }

    // 退会
    public function spMypageQuit(Request $request) {
        return view("admin/mypage/quit");
    }

    // 退会完了
    public function spMypageQuitDone(Request $request) {
        return view("admin/mypage/quit/done");
    }
}
