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

require __DIR__ . '/auth.php';

// Route Login Google Acoount use Socialite
Route::get('sign-in-google', 'Auth\AuthenticatedSessionController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\AuthenticatedSessionController@handleProviderCallback')->name('google.callback');

// Dashboard
Route::get('/', 'DashboardController@index');
// Contact Us
Route::get('kontak-kami', 'ContactController@index')->name('kontak.index');
// Catalog
Route::get('katalog/produk-nasa', 'CatalogController@product');
Route::get('katalog/produk-nasa/detail/{productSlug}', 'CatalogController@productDetail');
Route::get('katalog/produk-nasa/{categorySlug}', 'CatalogController@categoryNasa');
Route::get('katalog/produk-nasa/{categorySlug}/{subCategorySlug}', 'CatalogController@subCategoryNasa');
Route::get('katalog/daftar-harga', 'CatalogController@priceList');
Route::get('katalog/cara-belanja', 'CatalogController@howOrderNasa');
Route::get('katalog/lacak-paket', 'CatalogController@trackPackage');
// Product
Route::get('produk/produk-terbaru', 'ProductController@newProduct');
Route::get('produk/produk-terlaris', 'ProductController@bestProduct');
Route::get('produk/produk-pilihan', 'ProductController@selectionProduct');
// Partnership
Route::get('kemitraan/peluang-usaha', 'PartnershipController@opportunities');
Route::get('kemitraan/form-pendaftaran', 'PartnershipController@registrationForm');
// Article
Route::get('artikel', 'ArticleController@article');
Route::get('artikel/{slug}', 'ArticleController@articleDetail');
// Add, Update, Delete Cart
Route::post('add-to-cart', 'CartController@addCart');
Route::post('update-cart', 'CartController@updateCart');
Route::post('delete-cart-item', 'CartController@deleteCart');
// Get region and shipping cost Rajaongkir
Route::post('get-province', 'CartController@getProvince');
Route::post('get-city/{id}', 'CartController@getCity');
Route::post('get-courier', 'CartController@getCourier');
Route::post('get-package', 'CartController@getPackage');
Route::post('get-estimate', 'CartController@getEstimate');
// Get Sub Caegory Product
Route::post('get-sub-category', 'Admin\ProductController@getSubCategory');

// Users Route
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index');
    // Cart
    Route::get('keranjang', 'CartController@index');
    Route::post('keranjang', 'CartController@addPost')->name('keranjang');
    // Checkout
    Route::get('checkout', 'CheckoutController@index')->name('checkout.index');
    // Order
    Route::post('order', 'CheckoutController@placeorder')->name('checkout.placeorder');
    // Invoice & Midtrans
    Route::get('invoice/{id}', 'CheckoutController@invoice');
    Route::post('invoice/{id}', 'CheckoutController@paymentPost');
    // Rating & Review Product
    Route::post('tambah-review', 'ReviewController@addReview');
    // My Account
    Route::get('akun/beranda', 'MyAccountController@dashboard')->name('account.dashboard');
    Route::get('akun/profil', 'MyAccountController@myAccount');
    Route::get('akun/edit-profil/{id}', 'MyAccountController@editMyAccount');
    Route::put('akun/edit-profil/{id}', 'MyAccountController@updateMyAccount')->name('account.update-profile');
    Route::get('akun/alamat', 'MyAccountController@address');
    Route::get('akun/edit-alamat/{id}', 'MyAccountController@editAddress');
    Route::put('akun/edit-alamat/{id}', 'MyAccountController@updateAddress')->name('account.update-address');
    Route::get('akun/pesanan', 'MyAccountController@order');
    Route::get('akun/pesanan/{order_number}', 'MyAccountController@orderDetail');
    // Transaction Status
    Route::put('transaction/update-finish/{id}', 'MyAccountController@updateFinish');
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
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        // Store
        Route::resource('profil-toko', 'StoreController');
        // Customer
        Route::resource('pelanggan', 'CustomerController');
        // Category
        Route::resource('kategori', 'CategoryController');
        // Sub Category
        Route::resource('sub-kategori', 'SubCategoryController');
        // Product
        Route::resource('produk', 'ProductController');
        // Article
        Route::resource('artikel', 'ArticleController');
        // Transaction
        Route::get('transaksi', 'TransactionController@index')->name('transaksi.index');
        // Report
        Route::get('report-transaction', 'TransactionController@reportTransaction')->name('transaksi.report');
        Route::get('print-pdf/{fromDate}/{toDate}', 'TransactionController@printPdf');
    });

    // Update Transaction
    Route::put('transaction/update-process/{id}', 'TransactionController@updateProcess');
    Route::put('transaction/update-delivery/{id}', 'TransactionController@updateDelivery');

    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
