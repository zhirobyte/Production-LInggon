<?php
namespace App\Http\Controllers;

use Auth;

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
    return view('welcome');
});


Auth::routes();

//// ini adalah route buat auth dan login 
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@index')->name('admin');

Route::get('google', [SocialiteAuthController::class, 'googleRedirect'])->name('oauth/google');

Route::get('/oauth/google/callback', [SocialiteAuthController::class, 'loginWithGoogle']);

//roote ini buat milih admin dan tidaknya 
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


//kalau ini route buat produk dan list lainnya 
Route::resource('product', ProductController::class);



Route::get('admin', function () {
    return view('admin_template');
});


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
