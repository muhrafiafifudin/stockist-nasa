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
    return view('admin.pages.auth.register');
});

// Route::get('/', function () {
//     return view('users.pages.dashboard');
// });

Route::get('/dashboard', function () {
    return view('users.pages.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Users Route
Route::middleware(['auth'])->group(function () {

});

// Admin Route
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        // Login Route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });
});
