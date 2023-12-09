<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LKController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', [UserController::class, 'workers'])->name('index');

Auth::routes();

Route::get('/workers', [UserController::class, 'workers'])->name('workers');
Route::get('/workers/{user}', [UserController::class, 'detail'])->name('workersDetail');

Route::get('/products',[ProductController::class, 'products'])->name('products');
Route::get('/products/{product}',[ProductController::class, 'detail'])->name('productsDetail');

Route::get('/LK', [UserController::class, 'LK'])->name('LK');
