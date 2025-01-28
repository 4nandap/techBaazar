<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// DASHBOARD
use App\Http\Controllers\LayoutsController;
Route::get('/', [LayoutsController::class, 'index'])->name('home');

use App\Http\Controllers\CheckoutController;
Route::get('/checkoutChart', [CheckoutController::class, 'checkoutChart'])->name('checkoutChart');
Route::get('/checkoutInfo', [CheckoutController::class, 'checkoutInfo'])->name('checkoutInfo');
Route::get('/checkoutPayment', [CheckoutController::class, 'checkoutPayment'])->name('checkoutPayment');
Route::get('/checkoutComplete', [CheckoutController::class, 'checkoutComplete'])->name('checkoutComplete');

use App\Http\Controllers\ProductController;
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/productDetail', [ProductController::class, 'productDetail'])->name('productDetail');
