<?php

use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('users.pages.dashboard');
});

Route::get('/dashboard', function () {
    return view('users.pages.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('produk', 'ProductController@product');
Route::get('produk/{categorySlug}/{productSlug}', 'ProductController@productDetail');

Route::post('add-to-cart', 'CartController@addCart');
Route::post('update-cart', 'CartController@updateCart');
Route::post('delete-cart-item', 'CartController@deleteCart');

Route::get('kemitraan/peluang-usaha', 'PartnershipController@opportunities');
Route::get('kemitraan/form-pendaftaran', 'PartnershipController@registrationForm');

// Users Route
Route::middleware(['auth'])->group(function () {
    // Cart
    Route::get('keranjang', 'CartController@index');
    // Get region and shipping cost Rajaongkir
    Route::post('get-province', 'CartController@getProvince');
    Route::post('get-city/{id}', 'CartController@getCity');
    Route::post('get-courier', 'CartController@getCourier');
    Route::post('get-package', 'CartController@getPackage');
    Route::post('get-estimate', 'CartController@getEstimate');
});

// Admin Route
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        // Login Route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });

    Route::middleware('admin')->group(function () {
        // Dashboard
        Route::get('dashboard','DashboardController@index')->name('dashboard');
        // Category
        Route::resource('kategori', 'CategoryController');
        // Sub Category
        Route::resource('sub-kategori', 'SubCategoryController');
        // Product
        Route::resource('produk', 'ProductController');
    });

    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
