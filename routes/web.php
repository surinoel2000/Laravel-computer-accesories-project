<?php

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
    return view('Frontend.welcome');
});

Route::get('/index', function () {
    return view('Frontend.index');
});

Route::get('/checkout', function () {
    return view('Frontend.checkout');
});

Route::get('/store', function () {
    return view('Frontend.store');
});

Route::get('/product', function () {
    return view('Frontend.product');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/dashboard',function(){
        return view('Backend.admin.add_category');
    });
});
