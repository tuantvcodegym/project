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
    return view('welcome');
});
Route::group(['prefix'=>'home'], function (){
    Route::get('index', 'ProductController@getAll')->name('index');
    Route::get('getCategories/{id}', 'ProductController@getCategories')->name('getcategories');
    Route::post('search', 'ProductController@search')->name('search');
    Route::get('detail/{id}', 'ProductController@detail')->name('product.detail');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
   Route::get('admin', 'AdminController@list')->name('admin.list');
   Route::get('create', 'AdminController@store')->name('admin.store');
   Route::post('create', 'AdminController@create')->name('admin.create');
   Route::get('edit/{id}', 'AdminController@edit')->name('admin.edit');
   Route::post('edit/{id}', 'AdminController@update')->name('admin.update');
   Route::get('delete/{id}', 'AdminController@delete')->name('admin.delete');
   Route::get('store', 'CategoryController@store')->name('category.store');
   Route::post('store', 'CategoryController@create')->name('category.create');
   Route::get('detail/{id}', 'AdminController@detail')->name('admin.detail');
   Route::get('lichDatThue', 'AdminController@customer')->name('admin.customer');
   // route add nhieu image
    Route::get('storeFile', 'ImagesController@storeFile')->name('upload.file');
    Route::post('storeFile', 'ImagesController@createFile');
    //update Password
    Route::get('getPass/{id}', 'GetloginController@getPass')->name('getPass');
    Route::post('getPass/{id}', 'GetloginController@updatePass')->name('updatePass');
});
Route::group(['prefix' => 'login'], function (){
   Route::get('login', 'GetloginController@getLogin')->name('getLogin');
   Route::post('login', 'GetloginController@postLogin')->name('postLogin');
   Route::get('getRegister', 'GetloginController@getRegister')->name('getRegister');
   route::post('getRegister', 'GetloginController@postRegister')->name('postRegister');
});
Route::group(['prefix'=>'customer', 'middleware' => 'auth'], function (){
   Route::get('thueNha/{id}', 'ProductController@getThueNha')->name('customer.get');
   Route::post('thueNha/{id}', 'ProductController@postThueNha')->name('customer.post');
});

// login facebook api
Route::get('facebook/redirect', 'Auth\SocialController@redirectToProvider');
Route::get('facebook/callback', 'Auth\SocialController@handleProviderCallback');

// logout
Route::get('logout',['as'=>'logout', 'uses'=>'GetloginController@logOut']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// customer search
Route::get('searchCustomer', 'ProductController@searchCustomer')->name('searchCustomer');
Route::get('getProfile/{id?}', 'CustomerController@getProfile')->name('getProfile');
Route::get('cancelBathroom/{id}', 'CustomerController@cancelBathroom')->name('cancelBathroom');
Route::get('profile/{id}', 'CustomerController@profile')->name('profile');
Route::post('profile/{id}', 'CustomerController@updateProfile')->name('updateProfile');

Route::get('comment/{id}', 'CommentController@comment')->name('comment');
Route::get('getComment/{id}', 'CommentController@getComment')->name('getComment');

Route::get('about', 'AdminController@aboutUs')->name('home.about');
