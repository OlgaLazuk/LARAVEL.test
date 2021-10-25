<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WishlistController;
use App\Http\Middleware\CheckPassword;
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


Route::get('/', [HomeController::class, 'index'])
    ->name('main_page');

Route::get('search', [HomeController::class, 'search'])
    ->name('search');

//Route::get('random', [HomeController::class, 'random'])->name('random')->middleware([CheckPassword::class]);


Route::get('register', [LoginController::class, 'register'])
    ->name('register');
Route::post('register', [LoginController::class, 'registration'])
    ->name('registration');


Route::get('login', [LoginController::class, 'login'])
    ->name('login');
Route::post('login', [LoginController::class, 'checkLogin'])
    ->name('checkLogin');


Route::get('/catalog/{category}/{product}', [CatalogController::class, 'product'])
    ->name('product');

Route::get('/catalog/{category}', [CatalogController::class, 'category'])
    ->name('catalog_category');

Route::get('/catalog', [CatalogController::class, 'index'])
    ->name('catalog');

Route::post('add_to_cart', [CartController::class, 'addToCart'])
    ->name('add_to_cart');
Route::get('cart', [CartController::class, 'showCart'])
    ->name('showCart');


Route::post('add_to_wishlist', [WishlistController::class, 'addToWishlist'])
    ->name('add_to_wishlist');
Route::get('wishlist', [WishlistController::class, 'showWishlist'])
    ->name('showWishlist');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');

Route::post('/delete_to_cart/{id}',[CartController::class,'destroy'])
    ->name('delete_to_cart');

Route::prefix('adm')->name('admin.')
    ->middleware(CheckPassword::class)
    ->group(function () {
        Route::view('/', 'admin.dashboard');
        Route::resources([
            'categories' => CategoryController::class,
            'products' => ProductController::class
        ]);
    });




