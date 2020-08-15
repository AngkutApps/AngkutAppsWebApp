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

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');

    //category
    Route::get('/category/trash', 'Admin\CategoryController@getTrash')->name('category.trash');
    Route::get('/category/trash/{id}/restore', 'Admin\CategoryController@restore')->name('category.restore');
    Route::delete('category/trash/{id}', 'Admin\CategoryController@kill')->name('category.kill');
    Route::resource('/category', 'Admin\CategoryController');

    //articel
});
