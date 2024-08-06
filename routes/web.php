<?php

use App\AddProduct;
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

// routes/web.php
// Route::get('/home','')
Route::get('/login', function()
    {
        return View('auth.login');
    });
    Route::resource('/','AddProductController');
    Route::resource('/addproduct','AddProductController');

    Route::resource('/order','OrderController');
 Route::get('/register', function()
    {
        return View('auth.register');
    });

Auth::routes();


Route::group(['middleware'=>['guest']],function(){

    Route::resource('/','AddProductController');
}

);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
    ], function(){

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // Route::resource('/addproduct','AddProductController');
    // Route::resource('/snack','SnackController');
    // Route::get('/hero', function()
    // {
    //     return View('components.hero');
    // });



// Route::resource('/add-product', AddProduct::class);


    });
Route::resource('posts','PostController');