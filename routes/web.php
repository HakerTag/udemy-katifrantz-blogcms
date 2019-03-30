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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
    Route::get('/home','HomeController@index')->name('post.home');
    Route::get('/post/create', 'PostController@create')->name('post.create'); 
    Route::post('post/store','PostController@store')->name('post.store');

    Route::get('/category/create', 'CategoriesController@create')->name('category.create'); 
    Route::post('/category/store','CategoriesController@store')->name('category.store');
    Route::get('/categories','CategoriesController@index')->name('categories');
    Route::get('/categories/edit/{id}','CategoriesController@edit')->name('category.edit');
    Route::post('/category/update/{id}','CategoriesController@update')->name('category.update');
    Route::get('/categories/delete/{id}','CategoriesController@destroy')->name('category.delete');
});

