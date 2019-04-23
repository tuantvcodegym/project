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
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
   Route::get('admin', 'AdminController@list')->name('admin.list');
   Route::get('create', 'AdminController@store')->name('admin.store');
   Route::post('create', 'AdminController@create')->name('admin.create');
   Route::get('edit/{id}', 'AdminController@edit')->name('admin.edit');
   Route::post('edit/{id}', 'AdminController@update')->name('admin.update');
   Route::get('delete/{id}', 'AdminController@delete')->name('admin.delete');
});
Route::group(['prefix' => 'login'], function (){
   Route::get('login', 'GetloginController@getLogin')->name('getLogin');
   Route::post('login', 'GetloginController@postLogin')->name('postLogin');
   Route::get('getRegister', 'GetloginController@getRegister')->name('getRegister');
   route::post('getRegister', 'GetloginController@postRegister')->name('postRegister');
});

// login facebook api
Route::get('facebook/redirect', 'Auth\SocialController@redirectToProvider');
Route::get('facebook/callback', 'Auth\SocialController@handleProviderCallback');

// logout
Route::get('logout',['as'=>'logout', 'uses'=>'GetloginController@logOut']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
