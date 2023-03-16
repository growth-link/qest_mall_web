<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\TopController;
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

Route::get('/sale-mng/coupons', [CouponController::class, 'coupons']); // クーポン一覧編集
Route::get('/sale-mng/entry-shops', [CouponController::class, 'entryShops']); // 参加ショップ一覧・編集
Route::get('/sale-mng/entry-items', [CouponControoler::class, 'entryItems']); // 参加申請一覧
Route::get('/sale-mng/coupons/create', [CouponControoler::class, 'createCoupon']); // 新規クーポン追加
Route::get('/sale-mng/coupon-lps/create', [CouponControoler::class, 'createLp']); // LP作成・編集
Route::get('/sale-mng/coupon-lps/preview', [CouponControoler::class, 'createLp']); // LPプレビュー
Route::get('/sale-mng/coupons/detail', [CouponController::class, 'detail']); // クーポン利用条件詳細
Route::get('/sale-mng/coupons/edit', [CouponController::class, 'edit']); // クーポン詳細編集
Route::get('/sale-mng/coupons/items', [CouponController::class, 'edit']); // クーポン対象商品編集

/*
|--------------------------------------------------------------------------
| ショップ
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| 商品
|--------------------------------------------------------------------------
*/
Route::get('/item-info/items/create', [ItemController::class, 'edit']); // 新規商品登録
