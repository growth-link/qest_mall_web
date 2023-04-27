<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FirebaseTestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\MyMenuController;

use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| ユーザー画面定義
|--------------------------------------------------------------------------
*/

Route::get('/firebase/test', [FirebaseTestController::class, 'loginAnonymous']);

Route::get('/', function () {
    return view('welcome');
});

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
| ログイン
|--------------------------------------------------------------------------
*/

// pc
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'checkLogin'])->name('check_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/password-reset', [LoginController::class, 'passwordReset'])->name('password_reset');
Route::get('/register/send-mail', [LoginController::class, 'registerSendMail'])->name('register.send_mail');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/register/confirm', [LoginController::class, 'registerConfirm'])->name('register.confirm');

// sp
Route::get('/sp/login', [LoginController::class, 'spLogin'])->name('sp.login');
Route::post('/sp/login', [LoginController::class, 'spCheckLogin'])->name('sp.check_login');
Route::get('/sp/logout', [LoginController::class, 'spLogout'])->name('sp.logout');
Route::get('/sp/password-reset', [LoginController::class, 'spPasswordReset'])->name('sp.password_reset');
Route::get('/sp/register/send-mail', [LoginController::class, 'spRegisterSendMail'])->name('sp.register.send_mail');
Route::get('/sp/register/', [LoginController::class, 'spRegisterConfirm'])->name('sp.register');
Route::get('/sp/register/confirm', [LoginController::class, 'spRegisterConfirm'])->name('sp.register.confirm');

/*
|--------------------------------------------------------------------------
| Ajax用
|--------------------------------------------------------------------------
*/

Route::get('/shop-brand-name', [AjaxController::class, 'shopBrandName'])->name('shop_brand_name'); // ショップ・ブランド名一覧取得
Route::get('/shop-name', [AjaxController::class, 'shopName'])->name('shop_name'); // ショップ名一覧取得
Route::get('/brand-name', [AjaxController::class, 'brandName'])->name('brand_name'); // ブランド名一覧取得

/*
|--------------------------------------------------------------------------
| Qest mall Top
|--------------------------------------------------------------------------
*/

// pc
Route::get('/top', [TopController::class, 'top'])->name('top');
Route::get('/', [TopController::class, 'top'])->name('top');

// sp
Route::get('/sp/top', [TopController::class, 'spTop'])->name('sp.top');

/*
|--------------------------------------------------------------------------
| 商品
|--------------------------------------------------------------------------
*/

// pc
Route::get('/categories', [ItemController::class, 'categories'])->name('categories'); // カテゴリ一覧
Route::get('/items/keyword', [ItemController::class, 'itemKeyword'])->name('item_keyword'); // 商品一覧(キーワード検索)
Route::get('/items/flag-category/{sub_category}', [ItemController::class, 'flagCategory'])->name('flag_category'); // 商品一覧(フラグカテゴリ検索)
Route::get('/items/category/{category}', [ItemController::class, 'category'])->name('category'); // 商品一覧(カテゴリ検索)
Route::get('/items/brand/{brand}', [ItemController::class, 'brand'])->name('brand'); // 商品一覧(ブランド検索)
Route::get('/items/shop/{shop}', [ItemController::class, 'shop'])->name('shop'); // 商品一覧(ショップ)
Route::get('/items/detail/{item}', [ItemController::class, 'itemDetail'])->name('items_detail'); // 商品詳細
Route::get('/shops', [ItemController::class, 'shops'])->name('shops'); // ショップ一覧
Route::get('/brands', [ItemController::class, 'brands'])->name('brands'); // ブランド一覧
Route::get('/shop-brand-search', [ItemController::class, 'shopBrandSearch'])->name('shop_brand_search'); // ショップ・ブランド検索
Route::get('/shop-search', [ItemController::class, 'shopSearch'])->name('shop_search'); // ショップ検索
Route::get('/brand-search', [ItemController::class, 'brandSearch'])->name('brand_search'); // ブランド検索

// sp
Route::get('/sp/categories', [ItemController::class, 'spCategories'])->name('sp.categories'); // カテゴリ一覧
Route::get('/sp/items/keyword', [ItemController::class, 'spItemKeyword'])->name('sp.item_keyword'); // 商品一覧(キーワード検索)
Route::get('/sp/items/flag-category/{sub_category}', [ItemController::class, 'spFlagCategory'])->name('sp.flag_category'); // 商品一覧(フラグカテゴリ検索)
Route::get('/sp/items/category/{category}', [ItemController::class, 'spCategory'])->name('sp.category'); // 商品一覧(カテゴリ検索)
Route::get('/sp/items/brand/{brand}', [ItemController::class, 'spBrand'])->name('sp.brand'); // 商品一覧(ブランド検索)
Route::get('/sp/items/shop/{shop}', [ItemController::class, 'spShop'])->name('sp.shop'); // 商品一覧(ショップ)
Route::get('/sp/items/detail/{item}', [ItemController::class, 'spItemDetail'])->name('sp.items_detail'); // 商品詳細
Route::get('/sp/shops', [ItemController::class, 'spShops'])->name('sp.shops'); // ショップ一覧
Route::get('/sp/brands', [ItemController::class, 'spBrands'])->name('sp.brands'); // ブランド一覧
Route::get('/sp/shop-search', [ItemController::class, 'spShopSearch'])->name('sp.shop_search'); // ショップ検索
Route::get('/sp/brand-search', [ItemController::class, 'spBrandSearch'])->name('sp.brand_search'); // ブランド検索

/*
|--------------------------------------------------------------------------
| クーポン
|--------------------------------------------------------------------------
*/

// pc
Route::get('/coupons/{coupon}', [CouponController::class, 'coupons'])->name('coupons');

// sp
Route::get('/sp/coupons/{coupon}', [CouponController::class, 'spCoupons'])->name('sp.coupons');

/*
|--------------------------------------------------------------------------
| ショップ
|--------------------------------------------------------------------------
*/

// pc
Route::get('/shop-info/{shop}', [ShopController::class, 'shopInfo'])->name('shop_info');
Route::get('/delivery-and-postage/{shop}', [ShopController::class, 'deliveryAndPostage'])->name('delivery_and_postage');
Route::get('/contract', [ShopController::class, 'contract'])->name('contract');

// sp
Route::get('/sp/shop-info/{shop}', [ShopController::class, 'spShopInfo'])->name('sp.shop_info');
Route::get('/sp/delivery-and-postage/{shop}', [ShopController::class, 'spDeliveryAndPostage'])->name('sp.delivery_and_postage');
Route::get('/sp/contract', [ShopController::class, 'spContract'])->name('sp.contract');

/*
|--------------------------------------------------------------------------
| お知らせ
|--------------------------------------------------------------------------
*/

// PC
Route::get('/notices', [NoticeController::class, 'notices']);
Route::get('/notices/detail', [NoticeController::class, 'noticesDetail']);

// SP
Route::get('/sp/notices', [NoticeController::class, 'spNotices']);
Route::get('/sp/notices/detail', [NoticeController::class, 'spNoticesDetail']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
/*
|--------------------------------------------------------------------------
| FAQ
|--------------------------------------------------------------------------
*/

// PC
Route::get('/faq', [FAQController::class, 'faq'])->name('faq');

// SP
Route::get('/sp/faq', [FAQController::class, 'spFaq'])->name('sp.faq');

/*
|--------------------------------------------------------------------------
| マイメニュー
|--------------------------------------------------------------------------
*/

// PC
Route::get('/mypage/user-info', [MyMenuController::class, 'userInfo'])->name('user_info');
Route::post('/mypage/quit', [MyMenuController::class, 'quit'])->name('quit');
Route::get('/mypage/quit/done', [MyMenuController::class, 'quitDone'])->name('quit_done');

// SP
Route::get('/sp/mypage/user-info', [MyMenuController::class, 'spUserInfo'])->name('sp.user_info');
Route::post('/sp/mypage/quit', [MyMenuController::class, 'spQuit'])->name('sp.quit');
Route::get('/sp/mypage/quit/done', [MyMenuController::class, 'spQuitDone'])->name('sp.quit_done');

Route::post('/mail/send', [MailController::class, 'send'])->name('mail.send');
