<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\TopController;

/*
|--------------------------------------------------------------------------
| 管理画面ログイン
|--------------------------------------------------------------------------
*/

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

    Route::get('/shop-mng/notice-send-lists', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ配信リスト
    Route::get('/shop-mng/notice-send-lists/create', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ配信リスト追加
    Route::get('/shop-mng/notice-send-lists/edit', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ配信リスト編集
    Route::get('/shop-mng/notice-send-lists', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ配信リスト削除
    Route::get('/shop-mng/notices/create', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ作成
    Route::get('/shop-mng/notices/edit', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ編集
    Route::get('/shop-mng/notice-historys', [NoticeController::class, 'noticesDetail'])->name('notices.detail'); // ショップ管理 - お知らせ配信履歴
});

/*
|--------------------------------------------------------------------------
| ショップ
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/shop-mng/shops', [ShopController::class, 'notices'])->name('mall.notices'); // ショップ一覧
    Route::get('/shop-mng/shops/items', [ShopController::class, 'notices'])->name('mall.notices'); // 商品一覧
    Route::get('/shop-mng/shops/contract', [ShopController::class, 'notices'])->name('mall.notices'); // 契約情報
    Route::get('/shop-mng/shops/contract/corporate-info/edit', [ShopController::class, 'notices'])->name('mall.notices'); // 登録法人情報編集
    Route::get('/shop-mng/shops/contract/contract-info/edit', [ShopController::class, 'notices'])->name('mall.notices'); // 契約情報編集
    Route::get('/shop-mng/release-requests', [ShopController::class, 'notices'])->name('mall.notices'); // 公開申請一覧
    Route::get('/shop-mng/change-requests', [ShopController::class, 'notices'])->name('mall.notices'); // 変更申請一覧
});