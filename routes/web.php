<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuotationController;
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
});


Route::get('/products&services', function () {
    return view('productsnservices');
});

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/quotation', function () {
    return view('quotation');
});

Auth::routes();

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Quotation Routes
    Route::resource('quotations', QuotationController::class);

});
