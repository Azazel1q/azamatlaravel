<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LKController;
use App\Http\Controllers\OrderConroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Controls
// Route::controller(AuthController::class)->group(function(){
//     Route::get('/login', 'index')->name('login');
//     Route::post('/login', 'signIn')->name('signIn');

//     Route::get('/register', 'signUp')->name('signUp');
//     Route::post('/register', 'signUpForm')->name('signUpForm');
// });

// views
Route::get('/', [UserController::class, 'Main'])->name('home');
Route::get('/home', [UserController::class, 'Main'])->name('home.r');
Route::get('/LK', [UserController::class, 'LK'])->name('LK');

Auth::routes();

Route::get('/workers', [UserController::class, 'workers'])->name('workers');
Route::get('/workers/{user}', [UserController::class, 'detail'])->name('workersDetail');

Route::get('/products',[ProductController::class, 'products'])->name('products');
Route::get('/products/{product}',[ProductController::class, 'detail'])->name('productsDetail');

Route::get('/orders', [OrderConroller::class, "index"])->name('orders');
Route::get('/orders/{order}', [OrderConroller::class, "detail"])->name('ordersDetail');
Route::get('/orderForm', [OrderConroller::class, "orderForm"])->name('orderForm');
Route::post('/orderForm', [OrderConroller::class, "create"])->name('orders.create');
Route::post('/orders/{order}/updateStatus', [OrderConroller::class, "updateStatus"])->name('orders.statusUpdate');
// Route::post('/order/create', [OrderConroller::class, "create"])->name('ordercreate');
