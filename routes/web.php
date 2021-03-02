<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductController;

// Dashboard
use App\Http\Controllers\Dashboard\HomeController as DashboardHome;
use App\Http\Controllers\Dashboard\ProductController as DashboardProduct;

use App\Http\Controllers\ForPublic\PublicProductController;
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

/// dashboard route

// home
Route::get('/', [DashboardHome::class, 'index'])->name('dashboard.home');
Route::get('/cat/{id}', [DashboardHome::class, 'categories'])->name('dashboard.categories');

// product
Route::get('/product/{id}', [DashboardProduct::class, 'singlePage'])->name('product.single');

///

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->prefix('seller')->group(function () {
    Route::resource('product', ProductController::class);
});

Route::resource('address', AddressController::class)->middleware('auth');

// route ikan
// Route::get('product/{id}', [PublicProductController::class, 'single_product']);
