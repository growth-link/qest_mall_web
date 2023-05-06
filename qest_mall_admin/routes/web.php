<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\TopController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ProceedController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\BasicController;

use App\Http\Controllers\TestController;
use App\Http\Controllers\MailController;

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


Route::group(['middleware' => 'basicauth'], function() {

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
    | モール基本管理
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/basic-mng/basic-info', [BasicController::class, 'basicInfo'])->name('basic-info'); // 基本情報
        Route::get('/basic-mng/terms-of-open', [BasicController::class, 'termsOpen'])->name('terms-of-open'); // 出典規約
        Route::get('/basic-mng/terms-of-service', [BasicController::class, 'termsService'])->name('terms-of-service'); // 利用規約/個人情報保護方針
        Route::get('/basic-mng/admin-users', [BasicController::class, 'adminUsers'])->name('adminUsers'); // 管理ユーザー
        Route::get('/basic-mng/staff', [BasicController::class, 'staff'])->name('staff'); // スタッフマスタ
        Route::get('/basic-mng/top-banners', [BasicController::class, 'topBanners'])->name('top-banners'); // トップバナー編集
        Route::get('/basic-mng/ad-banners', [BasicController::class, 'adBanners'])->name('ad-banners'); // 広告バナー編集
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
        Route::get('/shop-mng/shops', [ShopController::class, 'shopManageShops'])->name('mall.shops'); // ショップ一覧
        Route::get('/shop-mng/shops/items', [ShopController::class, 'shopManageShopsItems'])->name('mall.items'); // 商品一覧
        Route::get('/shop-mng/shops/contract', [ShopController::class, 'shopManageShopsContract'])->name('mall.contcact'); // 契約情報
        Route::get('/shop-mng/shops/contract/corporate-info/edit', [ShopController::class, 'shopManageShopsContractCorporateInfoEdit'])->name('mall.corporate.edit'); // 登録法人情報編集
        Route::get('/shop-mng/shops/contract/contract-info/edit', [ShopController::class, 'shopManageShopsContractContractInfoEdit'])->name('mall.contract.edit'); // 契約情報編集
        Route::get('/shop-mng/release-requests', [ShopController::class, 'shopManageChangeRequests'])->name('mall.release_request'); // 公開申請一覧
        Route::get('/shop-mng/change-requests', [ShopController::class, 'shopManageChangeRequests'])->name('mall.change_request'); // 変更申請一覧
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
        Route::get('/sale-mng/entry-items', [CouponController::class, 'entryItems'])->name('entry_items'); // 参加申請一覧
        Route::get('/sale-mng/coupons/create', [CouponController::class, 'createCoupon'])->name('coupons.create'); // 新規クーポン追加
        Route::get('/sale-mng/coupon-lps/create', [CouponController::class, 'createLp'])->name('coupons_lps.create'); // LP作成・編集
        Route::get('/sale-mng/coupon-lps/preview', [CouponController::class, 'createLp'])->name('coupons_lps.preview'); // LPプレビュー
        Route::get('/sale-mng/coupons/detail', [CouponController::class, 'detail'])->name('coupons.create'); // クーポン利用条件詳細
        Route::post('/sale-mng/coupons/edit', [CouponController::class, 'editCoupon'])->name('coupons.create'); // クーポン詳細編集
        Route::get('/sale-mng/coupons/items', [CouponController::class, 'editCouponItems'])->name('coupons.create'); // クーポン対象商品編集
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
    | 売上・会計管理
    |--------------------------------------------------------------------------
    */
    Route::get('/proceeds-mng/statistics', [ProceedController::class, 'proceedStatistics'])->name("statistics"); // 統計情報
    Route::get('/proceeds-mng/histories', [ProceedController::class, 'proceedHistories'])->name("histories"); // 会計履歴
    Route::get('/proceeds-mng/monthly', [ProceedController::class, 'proceedMonthly'])->name("monthly"); // 月別精算明細


    Route::post('/mail/send', [MailController::class, 'send'])->name('mail.send');

    Route::get('/proceeds-mng/send_csv', [ProceedController::class, 'uploadCsv'])->name("send_csv");


    /*
    |--------------------------------------------------------------------------
    | 購入
    |--------------------------------------------------------------------------
    */
    Route::get('/order-mng/orders', [PurchaseController::class, 'orders'])->name("orders"); // 受注履歴一覧
    Route::get('/order-mng/new-orders', [PurchaseController::class, 'newOrders'])->name("new-orders"); // 新規注文一覧
    Route::get('/order-mng/orders/detail', [PurchaseController::class, 'detail'])->name("orders.detail"); // 注文情報
    Route::get('/order-mng/before-sends', [PurchaseController::class, 'beforeSends'])->name("before-sends"); // 発送準備一覧
    Route::get('/order-mng/cancel-requests', [PurchaseController::class, 'cancelRequests'])->name("cancel-requests"); // キャンセル依頼一覧
    Route::get('/order-mng/return-requests', [PurchaseController::class, 'returnRequests'])->name("return-requests"); // 返品依頼一覧

});