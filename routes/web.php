<?php

use App\Http\Controllers\StripeController;
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

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/contacts', function () {
    return view('home');
});

Route::get('/opportunities', function () {
    return view('home');
});

Route::get('/opportunity/{id?}', function () {
    return view('home');
});

Route::get('/profile/{path}', function () {

    return view('home');

});

Route::get('/create/customer', [StripeController::class, 'create']);

Route::get('/customer', [StripeController::class, 'customer']);
