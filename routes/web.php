<?php

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
    return view('Eshopper.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'FrontEndController@showShop');

Route::get('/product-details/{id}', 'FrontEndController@showProductDetails');

Route::get('/checkout', 'FrontEndController@showCheckout');
Route::get('/cart', 'FrontEndController@showCart');
Route::get('/blog', 'FrontEndController@showBlog');
Route::get('/blog/id', 'FrontEndController@showBlogByID');
Route::get('/contact', 'FrontEndController@showContact');
Route::get('/about', 'FrontEndController@showAbout
');

Route::get('/add-product', 'ProductController@addProduct')->name('product.add');
Route::post('/add-product', 'ProductController@store');
Route::get('/product-recommend', 'ProductController@showRecommendProduct')->name('product.recommend');
Route::get('/product-list', 'ProductController@listProduct')->name('product.list');
Route::get('/{id}/product-edit', 'ProductController@productEdit')->name('product.edit');
Route::post('/{id}/product-update', 'ProductController@productUpdate');
Route::get('/{id}/product-delete', 'ProductController@productDelete');

Route::get('/category', 'HomeController@showCategory')->name('category');
Route::post('/category/add', 'HomeController@addCategory');
Route::get('/category/{cate_id}/delete', 'HomeController@deleteCategory');

