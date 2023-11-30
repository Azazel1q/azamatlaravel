<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'signIn')->name('signIn');

    Route::get('/reg', 'signUp')->name('signUp');
    Route::post('/reg', 'signUpForm')->name('signUpForm');
});

// views
Route::get('/', HomeController::class)->name('home');
Route::get('/workers', [UserController::class, 'workers'])->name('workers');
Route::get('/{worker}', [UserController::class, 'profileWorker'])->name('profile');
