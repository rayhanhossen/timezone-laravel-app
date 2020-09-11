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

Route::get('/', 'FrontendController@index')->name('website.index');
Route::get('/add-to-cart/{id}', 'FrontendController@addToCart')->name('website.addCart');
Route::get('/shopping-cart', 'FrontendController@getCart')->name('website.cart');
Route::get('/checkout-cart', 'FrontendController@getCheckout')->name('website.checkout');
Route::post('/checkout-cart', 'FrontendController@storeOrder')->name('website.storeOrder');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'BackendController@index')->name('backend.index')->middleware('auth');

Route::resource('/dashboard/productcategory','ProductCategoryController');

Route::resource('/dashboard/product','ProductController');
Route::resource('/dashboard/productImage','ProductImageController');

Route::resource('/dashboard/customerDetail','CustomerDetailController');
Route::resource('/dashboard/payment','PaymentController');

Route::resource('/dashboard/contact','ContactController');
Route::resource('/dashboard/contactForm','ContactFormController');

