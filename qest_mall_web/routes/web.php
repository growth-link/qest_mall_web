<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// トップ（未ログイン）
Route::get('/top', [ItemController::class, 'top']);
Route::get('/sp/top', [ItemController::class, 'spTop']);

/*
|--------------------------------------------------------------------------
| ユーザー向けフロント画面　ログイン
|--------------------------------------------------------------------------
*/
// ログイン
Route::get('/login', [LoginController::class, 'login']);
Route::get('/sp/login', [LoginController::class, 'spLogin']);

// ログアウト
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/sp/logout', [LoginController::class, 'spLogout']);

// 会員情報入力
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/sp/register', [RegisterController::class, 'spRegister']);

// 会員情報入力確認
Route::post('/register/confirm', [RegisterController::class, 'registerConfirm']);
Route::post('/sp/register/confirm', [RegisterController::class, 'spRegisterConfirm']);

// 新規会員登録（メールアドレス認証）
Route::get('/register/send-mail', [RegisterController::class, 'sendMail']);
Route::get('/sp/register/send-mail', [RegisterController::class, 'spSendMail']);

// パスワード再設定
Route::get('/password-reset/send-email', [RegisterController::class, 'passResetSendMail']);
Route::get('/sp/password-reset/send-email', [RegisterController::class, 'spPassResetSendMail']);

/*
|--------------------------------------------------------------------------
| ユーザー向けフロント画面　商品
|--------------------------------------------------------------------------
*/
// カテゴリ一覧
Route::get('/categories', [ItemController::class, 'categories']);
Route::get('/sp/categories', [ItemController::class, 'spCategories']);

// 商品一覧(キーワード検索)
Route::get('/item/keyword', [ItemController::class, 'itemKeyword']);
Route::get('/sp/item/keyword', [ItemController::class, 'spItemKeyword']);

// 商品一覧(フラグカテゴリ検索)
Route::get('/items/frag-category', [ItemController::class, 'fragCategory']);
Route::get('/sp/items/frag-category', [ItemController::class, 'spFragCategory']);

// 商品一覧(カテゴリ検索)
Route::get('/items/category', [ItemController::class, 'category']);
Route::get('/sp/items/category', [ItemController::class, 'spCategory']);

// 商品一覧(ブランド検索)
Route::get('/items/brand', [ItemController::class, 'brand']);
Route::get('/sp/items/brand', [ItemController::class, 'spBrand']);

// 商品一覧(ショップ)
Route::get('/items/shop', [ItemController::class, 'shop']);
Route::get('/sp/items/shop', [ItemController::class, 'spShop']);

// 商品詳細
Route::get('/items/detail', [ItemController::class, 'brand']);
Route::get('/sp/items/brand', [ItemController::class, 'spBrand']);

/*
|--------------------------------------------------------------------------
| モール管理画面
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| ショップ管理画面
|--------------------------------------------------------------------------
*/

    //ログイン済のみ有効
    // Route::group(['middleware' => ['auth']], function () {

        /*************************************************************************
         *  トップ
         */

        // Route::get('/', 'HomeController@home')->name('root');
        // Route::get('/top', 'TopController@top')->name('top');
