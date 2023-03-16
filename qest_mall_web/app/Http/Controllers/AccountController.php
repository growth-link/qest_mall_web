<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class AccountController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | アカウント PC
    |--------------------------------------------------------------------------
    */
    // 基本情報Top
    public function mypageUserInfo(Request $request) {
        return view("admin/mypage/user-info");
    }

    // 通知設定一覧
    public function mypageNoticeSettings(Request $request) {
        return view("admin/mypage/notice-settings");
    }

    // メールマガジン確認・停止(クエストモール)
    public function mypageNoticeSettingsMallMail(Request $request) {
        return view("admin/mypage/notice-settings/mall-mail");
    }

    // メールマガジン確認・停止(ショップ)
    public function mypageNoticeSettingsShopMail(Request $request) {
        return view("admin/mypage/notice-settings/shop-mail");
    }

    // クレジットカード登録一覧
    public function mypageCreditCards(Request $request) {
        return view("admin/mypage/credit-cards");
    }

    // クレジットカード編集
    public function mypageCreditCardsEdit(Request $request) {
        return view("admin/mypage/credit-cards/edit");
    }

    // 購入履歴一覧
    public function mypagePurchaseHistorys(Request $request) {
        return view("admin/mypage/purchase-historys");
    }

    // 注文詳細
    public function mypagePurchaseHistorysDetail(Request $request) {
        return view("admin/mypage/purchase-historys/detail");
    }

    // ご利用明細
    public function mypagePurchaseHistorysDetailUsageDetail(Request $request) {
        return view("admin/mypage/purchase-historys/detail/usage-detail");
    }

    // クーポン一覧
    public function mypageCoupons(Request $request) {
        return view("admin/mypage/coupons");
    }

    // ポイント情報
    public function mypagePointInfo(Request $request) {
        return view("admin/mypage/point-info");
    }

    // お気に入り
    public function mypageFavouritesItems(Request $request) {
        return view("admin/mypage/favourites/items");
    }

    // お気に入りショップ
    public function mypageFavouritesShops(Request $request) {
        return view("admin/mypage/favourites/shops");
    }

    // 退会
    public function mypageQuit(Request $request) {
        return view("admin/mypage/quit");
    }

    // 退会完了
    public function mypageQuitDone(Request $request) {
        return view("admin/mypage/quit/done");
    }






    /*
    |--------------------------------------------------------------------------
    | アカウント SP
    |--------------------------------------------------------------------------
    */
    // 基本情報Top
    public function mypageUserInfo(Request $request) {
        return view("admin/mypage/user-info");
    }

    // 通知設定一覧
    public function mypageNoticeSettings(Request $request) {
        return view("admin/mypage/notice-settings");
    }

    // メールマガジン確認・停止(クエストモール)
    public function mypageNoticeSettingsMallMail(Request $request) {
        return view("admin/mypage/notice-settings/mall-mail");
    }

    // メールマガジン確認・停止(ショップ)
    public function mypageNoticeSettingsShopMail(Request $request) {
        return view("admin/mypage/notice-settings/shop-mail");
    }

    // クレジットカード登録一覧
    public function mypageCreditCards(Request $request) {
        return view("admin/mypage/credit-cards");
    }

    // クレジットカード編集
    public function mypageCreditCardsEdit(Request $request) {
        return view("admin/mypage/credit-cards/edit");
    }

    // 購入履歴一覧
    public function mypagePurchaseHistorys(Request $request) {
        return view("admin/mypage/purchase-historys");
    }

    // 注文詳細
    public function mypagePurchaseHistorysDetail(Request $request) {
        return view("admin/mypage/purchase-historys/detail");
    }

    // ご利用明細
    public function mypagePurchaseHistorysDetailUsageDetail(Request $request) {
        return view("admin/mypage/purchase-historys/detail/usage-detail");
    }

    // クーポン一覧
    public function mypageCoupons(Request $request) {
        return view("admin/mypage/coupons");
    }

    // ポイント情報
    public function mypagePointInfo(Request $request) {
        return view("admin/mypage/point-info");
    }

    // お気に入り
    public function mypageFavouritesItems(Request $request) {
        return view("admin/mypage/favourites/items");
    }

    // お気に入りショップ
    public function mypageFavouritesShops(Request $request) {
        return view("admin/mypage/favourites/shops");
    }

    // 退会
    public function mypageQuit(Request $request) {
        return view("admin/mypage/quit");
    }

    // 退会完了
    public function mypageQuitDone(Request $request) {
        return view("admin/mypage/quit/done");
    }
}
