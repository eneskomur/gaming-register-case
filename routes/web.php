<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/register');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register/phone', 'getPhoneForm')->name('register.phone');
    Route::post('/register/account', 'getAccountForm')->name('register.account');
    Route::post('/register/complete', 'complete')->name('register.complete');
    Route::get('/email/verify', 'verify')->middleware('auth')->name('verification.notice');
});
