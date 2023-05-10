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
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PdfController;

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

Route::group(['middleware' => 'basicauth'], function() {

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
    Route::post('/register/send-mail', [RegisterController::class, 'registerSendMail'])->name('register.send_mail'); //新規会員登録メール送信
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::get('/register/confirm', [RegisterController::class, 'registerConfirm'])->name('register.confirm');

    // sp
    Route::get('/sp/login', [LoginController::class, 'spLogin'])->name('sp.login');
    Route::post('/sp/login', [LoginController::class, 'spCheckLogin'])->name('sp.check_login');
    Route::get('/sp/logout', [LoginController::class, 'spLogout'])->name('sp.logout');
    Route::get('/sp/password-reset', [LoginController::class, 'spPasswordReset'])->name('sp.password_reset');
    Route::get('/sp/register/send-mail', [RegisterController::class, 'spRegisterSendMail'])->name('sp.register.send_mail');
    Route::get('/sp/register/', [RegisterController::class, 'spRegisterConfirm'])->name('sp.register');
    Route::get('/sp/register/confirm', [RegisterController::class, 'spRegisterConfirm'])->name('sp.register.confirm');

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
    | アカウント
    |--------------------------------------------------------------------------
    */

    // PC
    Route::get('/mypage/user-info', [AccountController::class, 'mypageUserInfo'])->name("mypage.user_info"); // 基本情報Top
    Route::get('/mypage/notice-settings', [AccountController::class, 'mypageNoticeSettings'])->name("mypage.notice_settings"); // 通知設定一覧
    Route::get('/mypage/notice-settings/mall-mail', [AccountController::class, 'mypageNoticeSettingsMallMail'])->name("mypage.mall_mail"); // メールマガジン確認・停止(クエストモール)
    Route::get('/mypage/notice-settings/shop-mail', [AccountController::class, 'mypageNoticeSettingsShopMail'])->name("mypage.shop_mail"); // メールマガジン確認・停止(ショップ)
    Route::get('/mypage/credit-cards', [AccountController::class, 'mypageCreditCards'])->name("mypage.credit_cards"); // クレジットカード登録一覧
    Route::get('/mypage/credit-cards/edit', [AccountController::class, 'mypageCreditCardsEdit'])->name("mypage.credit_cards.edit"); // クレジットカード編集
    Route::get('/mypage/purchase-histories', [AccountController::class, 'mypagePurchaseHistorys'])->name("mypage.purchase_histories");; // 購入履歴一覧
    Route::get('/mypage/purchase-histories/detail', [AccountController::class, 'mypagePurchaseHistorysDetail'])->name("mypage.purchase_histories.detail"); // 注文詳細
    Route::get('/mypage/purchase-histories/detail/usage-detail', [AccountController::class, 'mypagePurchaseHistorysDetailUsageDetail'])->name("mypage.purchase_histories.detail.usage"); // ご利用明細
    Route::get('/mypage/coupons', [AccountController::class, 'mypageCoupons'])->name("mypage.coupons"); // クーポン一覧
    Route::get('/mypage/point-info', [AccountController::class, 'mypagePointInfo'])->name("mypage.point_info"); // ポイント情報
    Route::get('/mypage/favorites/items', [AccountController::class, 'mypageFavoritesItems'])->name("mypage.favorite_items"); // お気に入り
    Route::get('/mypage/favorites/shops', [AccountController::class, 'mypageFavoritesShops'])->name("mypage.favorite_shops"); // お気に入りショップ
    Route::get('/mypage/quit', [AccountController::class, 'mypageQuit'])->name("mypage.quit"); // 退会
    Route::get('/mypage/quit/done', [AccountController::class, 'mypageQuitDone'])->name("mypage.quit_done"); // 退会完了

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
    | 商品
    |--------------------------------------------------------------------------
    */

    // pc
    Route::get('/categories', [ItemController::class, 'categories'])->name('categories'); // カテゴリ一覧
    Route::get('/items/keyword', [ItemController::class, 'itemKeyword'])->name('item_keyword'); // 商品一覧(キーワード検索)
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
    Route::get('/notices', [NoticeController::class, 'notices'])->name("notices");
    Route::get('/notices/detail', [NoticeController::class, 'noticesDetail'])->name("notice_detail");

    // SP
    Route::get('/sp/notices', [NoticeController::class, 'spNotices'])->name("sp.notices");
    Route::get('/sp/notices/detail', [NoticeController::class, 'spNoticesDetail'])->name("sp.notice_detail");

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
    | FAQ その他
    |--------------------------------------------------------------------------
    */

    // PC
    Route::get('/faq', [FAQController::class, 'faq'])->name('faq');
    Route::get('/corporate-info', [FAQController::class, 'corporateInfo'])->name('corporate-info');

    // SP
    Route::get('/sp/faq', [FAQController::class, 'spFaq'])->name('sp.faq');
    Route::get('/sp/corporate-info', [FAQController::class, 'spCorporateInfo'])->name('sp.corporate-info');

    /*
    |--------------------------------------------------------------------------
    | マイメニュー
    |--------------------------------------------------------------------------
    */

    // PC
    Route::post('/mypage/quit', [MyMenuController::class, 'quit'])->name('quit');
    Route::get('/mypage/quit/done', [MyMenuController::class, 'quitDone'])->name('quit_done');

    // SP
    Route::post('/sp/mypage/quit', [MyMenuController::class, 'spQuit'])->name('sp.quit');
    Route::get('/sp/mypage/quit/done', [MyMenuController::class, 'spQuitDone'])->name('sp.quit_done');

    Route::post('/mail/send', [MailController::class, 'send'])->name('mail.send');


    /*
    |--------------------------------------------------------------------------
    | 購入
    |--------------------------------------------------------------------------
    */
    // PC
    Route::get('/cart', [PurchaseController::class, 'cart'])->name('cart'); // カート
    Route::get('/cart/purchase/{cart_id}', [PurchaseController::class, 'cartPurchase'])->name('cart.purchase'); // 購入手続き

    // SP
    Route::get('/sp/cart', [PurchaseController::class, 'spCart'])->name('sp.cart');

    /*
    |--------------------------------------------------------------------------
    | PDF
    |--------------------------------------------------------------------------
    */
    Route::get('/pdf/statement', [PdfController::class, 'createStatement']);
    Route::get('/pdf/payment-statement', [PdfController::class, 'createPaymentStatement']);
});
