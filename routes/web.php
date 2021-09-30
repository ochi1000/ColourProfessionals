<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/products&services', function () {
    return view('productsnservices');
});

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/discover', function () {
    return view('discover');
});

Route::get('/quotation', function () {
    return view('quotation');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', function () {
//     return view('auth.login');
// });

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/admin/quotation', function () {
//     return view('admin.quotation');
// });

// Route::get('/admin/quotation/print', function () {
//     return view('admin.quotationPrintout');
// });

// Route::post('/admin/quotation/create', 'App\Http\Controllers\AdminController@createQuotation');
// // Route::post('/admin/quotation/create', [AdminController::class, 'createQuotation']);

// Route::redirect('/register','/');


