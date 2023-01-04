<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FirebaseTestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TopController;

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
| Qest mall Top
|--------------------------------------------------------------------------
*/

// pc
Route::get('/top', [TopController::class, 'top'])->name('top');

// sp
Route::get('/sp/top', [TopController::class, 'spTop'])->name('sp.top');

/*
|--------------------------------------------------------------------------
| ショップ
|--------------------------------------------------------------------------
*/

// pc
Route::get('/shop-info', [ShopController::class, 'shopInfo']);
Route::get('/delivery-and-postage', [ShopController::class, 'deliveryAndPostage']);

// sp
Route::get('/sp/shop-info', [ShopController::class, 'spShopInfo']);
Route::get('/sp/delivery-and-postage', [ShopController::class, 'spDeliveryAndPostage']);

/*
|--------------------------------------------------------------------------
| お知らせ
|--------------------------------------------------------------------------
*/

// PC
Route::get('/notices', [NoticeController::class, 'notices']);
Route::get('/notices/detail', [NoticeController::class, 'noticesDetail']);

// SP
Route::get('/sp/notices', [FirebaseTestController::class, 'spNotices']);
Route::get('/sp/notices/detail', [FirebaseTestController::class, 'spNoticesDetail']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/admin.php';