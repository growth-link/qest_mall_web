<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\TopController;
use App\Http\Controllers\Admin\ItemController;

use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| 管理画面ログイン
|--------------------------------------------------------------------------
*/
Route::get('/', function () { return redirect()->to('/admin/login'); });

// Route::name('admin.')->group(['prefix'=>'admin'], function() {
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [AdminController::class, 'index'] )->name('index');
    Route::get('/login', [AuthController::class, 'login'])->name('login'); // ログイン
    Route::post('/login', [AuthController::class, 'checkLogin'])->name('check_login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/password-reset', [AuthController::class, 'passwordReset'])->name('password_reset'); // パスワード再設定
});

/*
|--------------------------------------------------------------------------
| 管理画面選択
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/mode-select', [AdminController::class, 'modeSelect'] )->name('mode_select');
    Route::get('/shops', [AdminController::class, 'shops'] )->name('shops');
});

/*
|--------------------------------------------------------------------------
| 管理画面TOP
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/mall/top', [TopController::class, 'topMall'] )->name('mall_top');
    Route::get('/shop/top', [TopController::class, 'topShop'] )->name('shop_top');
});

/*
|--------------------------------------------------------------------------
| お知らせ
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/notices', [NoticeController::class, 'notices'])->name('notices'); // お知らせ一覧
    Route::get('/notices/detail', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // お知らせ詳細
    
    Route::get('/customer-mng/notices/create', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // 顧客管理 - お知らせ作成
    Route::get('/customer-mng/notices/edit', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // 顧客管理 - お知らせ編集
    Route::get('/customer-mng/notice-historys', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // 顧客管理 - お知らせ配信履歴
    Route::get('/customer-mng/notice-send-lists', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // 顧客管理 - お知らせ配信リスト
    Route::get('/customer-mng/notice-send-lists/create', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // 顧客管理 - お知らせ配信リスト追加
    Route::get('/customer-mng/notice-send-lists/edit', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // 顧客管理 - お知らせ配信リスト編集
    Route::get('/customer-mng/notice-send-lists', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // 顧客管理 - お知らせ配信リスト削除

    // ショップ管理
    Route::get('/shop-mng/notice-send-lists', [NoticeController::class, 'noticeSendLists'])->name('notices.send_lists'); // ショップ管理 - お知らせ配信リスト
    Route::get('/shop-mng/notice-send-lists/create', [NoticeController::class, 'noticeSendListsCreate'])->name('notices.send_lists.create'); // ショップ管理 - お知らせ配信リスト追加
    Route::get('/shop-mng/notice-send-lists/edit', [NoticeController::class, 'noticeSendListsEdit'])->name('notices.send_lists.edit'); // ショップ管理 - お知らせ配信リスト編集
    // Route::get('/shop-mng/notice-send-lists', [NoticeController::class, 'noticeSendLists'])->name('notices.detail'); // ショップ管理 - お知らせ配信リスト削除
    // Route::get('/shop-mng/notices/create', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ作成
    // Route::get('/shop-mng/notices/edit', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ編集
    Route::get('/shop-mng/notice-histories', [NoticeController::class, 'noticeHistories'])->name('notices.histories'); // ショップ管理 - お知らせ配信履歴
});

/*
|--------------------------------------------------------------------------
| ショップ
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/shop-mng/shops', [ShopController::class, 'shopManageShops'])->name('mall.notices'); // ショップ一覧
    Route::get('/shop-mng/shops/items', [ShopController::class, 'shopManageShopsItems'])->name('mall.notices'); // 商品一覧
    Route::get('/shop-mng/shops/contract', [ShopController::class, 'shopManageShopsContract'])->name('mall.notices'); // 契約情報
    Route::get('/shop-mng/shops/contract/corporate-info/edit', [ShopController::class, 'shopManageShopsContractCorporateInfoEdit'])->name('mall.notices'); // 登録法人情報編集
    Route::get('/shop-mng/shops/contract/contract-info/edit', [ShopController::class, 'shopManageShopsContractContractInfoEdit'])->name('mall.notices'); // 契約情報編集
    Route::get('/shop-mng/release-requests', [ShopController::class, 'shopManageChangeRequests'])->name('mall.notices'); // 公開申請一覧
    Route::get('/shop-mng/change-requests', [ShopController::class, 'shopManageChangeRequests'])->name('mall.notices'); // 変更申請一覧
    Route::get('/shop-mng/shops/create', [ShopController::class, 'shopShopsCreate'])->name('shop.shops.create'); // 新規ショップ追加
});

/*
|--------------------------------------------------------------------------
| ユーザー画面定義
|--------------------------------------------------------------------------
*/

// 全ルート確認
Route::get('routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

// コンポーネントや動作テスト用
Route::get('/test', [TestController::class, 'test'])->name('test');

/*
|--------------------------------------------------------------------------
| Ajax用
|--------------------------------------------------------------------------
*/

Route::get('/shop-brand-name', [AjaxController::class, 'shopBrandName'])->name('shop_brand_name'); // ショップ・ブランド名一覧取得

/*
|--------------------------------------------------------------------------
| ショップ基本管理
|--------------------------------------------------------------------------
*/

// Route::get('/basic-mng/contract', [CouponController::class, 'coupons']); // 契約情報　
// Route::get('/basic-mng/shop-info', [CouponController::class, 'coupons']);

/*
|--------------------------------------------------------------------------
| クーポン
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/sale-mng/coupons', [CouponController::class, 'coupons'])->name('coupons'); // クーポン一覧編集
    Route::get('/sale-mng/entry-shops', [CouponController::class, 'entryShops'])->name('entry_shops'); // 参加ショップ一覧・編集
    Route::get('/sale-mng/entry-items', [CouponControoler::class, 'entryItems'])->name('entry_items'); // 参加申請一覧
    Route::get('/sale-mng/coupons/create', [CouponControoler::class, 'createCoupon'])->name('coupons.create'); // 新規クーポン追加
    Route::get('/sale-mng/coupon-lps/create', [CouponControoler::class, 'createLp'])->name('coupons_lps.create'); // LP作成・編集
    Route::get('/sale-mng/coupon-lps/preview', [CouponControoler::class, 'createLp'])->name('coupons_lps.preview'); // LPプレビュー
    Route::get('/sale-mng/coupons/detail', [CouponController::class, 'detail'])->name('coupons.create'); // クーポン利用条件詳細
    Route::get('/sale-mng/coupons/edit', [CouponController::class, 'edit'])->name('coupons.create'); // クーポン詳細編集
    Route::get('/sale-mng/coupons/items', [CouponController::class, 'edit'])->name('coupons.create'); // クーポン対象商品編集
});


/*
|--------------------------------------------------------------------------
| 商品
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/item-info/items', [ItemController::class, 'items'])->name('item.items'); // 新規商品登録
    Route::get('/item-info/items/create', [ItemController::class, 'itemsCreate'])->name('item.create'); // 新規商品登録

    Route::get('/item-info/items/do/create', [ItemController::class, 'create'])->name('item.do.create'); // 商品登録
});

/*
|--------------------------------------------------------------------------
| アカウント
|--------------------------------------------------------------------------
*/

// PC
Route::get('/mypage/user-info', [AccountController::class, 'mypageUserInfo']); // 基本情報Top
Route::get('/mypage/notice-settings', [AccountController::class, 'mypageNoticeSettings']); // 通知設定一覧
Route::get('/mypage/notice-settings/mall-mail', [AccountController::class, 'mypageNoticeSettingsMallMail']); // メールマガジン確認・停止(クエストモール)
Route::get('/mypage/notice-settings/shop-mail', [AccountController::class, 'mypageNoticeSettingsShopMail']); // メールマガジン確認・停止(ショップ)
Route::get('/mypage/credit-cards', [AccountController::class, 'mypageCreditCards']); // クレジットカード登録一覧
Route::get('/mypage/credit-cards/edit', [AccountController::class, 'mypageCreditCardsEdit']); // クレジットカード編集
Route::get('/mypage/purchase-historys', [AccountController::class, 'mypagePurchaseHistorys']); // 購入履歴一覧
Route::get('/mypage/purchase-historys/detail', [AccountController::class, 'mypagePurchaseHistorysDetail']); // 注文詳細
Route::get('/mypage/purchase-historys/detail/usage-detail', [AccountController::class, 'mypagePurchaseHistorysDetailUsageDetail']); // ご利用明細
Route::get('/mypage/coupons', [AccountController::class, 'mypageCoupons']); // クーポン一覧
Route::get('/mypage/point-info', [AccountController::class, 'mypagePointInfo']); // ポイント情報
Route::get('/mypage/favourites/items', [AccountController::class, 'mypageFavouritesItems']); // お気に入り
Route::get('/mypage/favourites/shops', [AccountController::class, 'mypageFavouritesShops']); // お気に入りショップ
Route::get('/mypage/quit', [AccountController::class, 'mypageQuit']); // 退会
Route::get('/mypage/quit/done', [AccountController::class, 'mypageQuitDone']); // 退会完了

// sp
Route::get('/sp/mypage/user-info', [AccountController::class, 'spMypageUserInfo']); // 基本情報Top
Route::get('/sp/mypage/notice-settings', [AccountController::class, 'spMypageNoticeSettings']); // 通知設定一覧
Route::get('/sp/mypage/notice-settings/mall-mail', [AccountController::class, 'spMypageNoticeSettingsMallMail']); // メールマガジン確認・停止(クエストモール)
Route::get('/sp/mypage/notice-settings/shop-mail', [AccountController::class, 'spMypageNoticeSettingsShopMail']); // メールマガジン確認・停止(ショップ)
Route::get('/sp/mypage/credit-cards', [AccountController::class, 'spMypageCreditCards']); // クレジットカード登録一覧
Route::get('/sp/mypage/credit-cards/edit', [AccountController::class, 'spMypageCreditCardsEdit']); // クレジットカード編集
Route::get('/sp/mypage/purchase-historys', [AccountController::class, 'spMypagePurchaseHistorys']); // 購入履歴一覧
Route::get('/sp/mypage/purchase-historys/detail', [AccountController::class, 'spMypagePurchaseHistorysDetail']); // 注文詳細
Route::get('/sp/mypage/purchase-historys/detail/usage-detail', [AccountController::class, 'spMypagePurchaseHistorysDetailUsageDetail']); // ご利用明細
Route::get('/sp/mypage/coupons', [AccountController::class, 'spMypageCoupons']); // クーポン一覧
Route::get('/sp/mypage/point-info', [AccountController::class, 'spMypagePointInfo']); // ポイント情報
Route::get('/sp/mypage/favourites/items', [AccountController::class, 'spMypageFavouritesItems']); // お気に入り
Route::get('/sp/mypage/favourites/shops', [AccountController::class, 'spMypageFavouritesShops']); // お気に入りショップ
Route::get('/sp/mypage/quit', [AccountController::class, 'spMypageQuit']); // 退会
Route::get('/sp/mypage/quit/done', [AccountController::class, 'spMypageQuitDone']); // 退会完了


/*
|--------------------------------------------------------------------------
| 売上・会計管理
|--------------------------------------------------------------------------
*/
Route::get('/proceeds-mng/statistics', [ProceedController::class, 'proceedStatistics']); // 統計情報
Route::get('/proceeds-mng/histories', [ProceedController::class, 'proceedHistories']); // 会計履歴
Route::get('/proceeds-mng/monthly', [ProceedController::class, 'proceedMonthly']); // 月別精算明細