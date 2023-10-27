<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\VendreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/index', function () {
    return view('recycle.index');
})->name('recycle.index');

Route::get('/about', function () {
    return view('recycle.about');
})->name('recycle.about');




// Route::get('/shop', function () {
//     return view('recycle.shop');
// })->name('recycle.shop');

// Route::get('/cart', function () {
//     return view('recycle.cart');
// })->name('recycle.cart');

Route::get('/services', function () {
    return view('recycle.services');
})->name('recycle.services');

Route::get('/checkout', function () {
    return view('recycle.checkout');
})->name('recycle.checkout');

Route::get('/thankyou', function () {
    return view('recycle.thankyou');
})->name('recycle.thankyou');











Route::get('/user', function () {
    return view('recycle.user');
})->name('recycle.user');


Route::get('/contact', [ContactController::class, 'contact'])->name('recycle.contact');
Route::get('/shop', [ShopController::class, 'achat'])->name('recycle.shop');
Route::get('/cart', [CartController::class, 'panier'])->name('recycle.cart');
Route::get('/vendre', [VendreController::class, 'vente'])->name('recycle.vendre');
// Route::get('/user', [UserController::class, 'u'])->name('recycle.user');
Route::get('/registerView', [AuthController::class, 'registerView'])->name('recycle.register');
Route::get('/loginView', [AuthController::class, 'loginView'])->name('recycle.login');

Route::Post('/login', [AuthController::class, 'login'])->name('recycle.log');
Route::Post('/register', [AuthController::class, 'register'])->name('recycle.regist');
