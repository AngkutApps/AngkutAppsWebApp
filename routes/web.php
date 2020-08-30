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


Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'adminweb'], function () {
    Auth::routes(['register' => false]);
});




Route::group(['prefix' => 'adminweb', 'middleware' => ['auth']], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');

    //category
    Route::get('/category/trash', 'Admin\CategoryController@getTrash')->name('category.trash');
    Route::get('/category/trash/{id}/restore', 'Admin\CategoryController@restore')->name('category.restore');
    Route::delete('category/trash/{id}', 'Admin\CategoryController@kill')->name('category.kill');
    Route::resource('/category', 'Admin\CategoryController');

    //article
    Route::get('/article/trash', 'Admin\ArticleController@getTrash')->name('article.trash');
    Route::get('/article/trash/{id}/restore', 'Admin\ArticleController@restore')->name('article.restore');
    Route::delete('article/trash/{id}', 'Admin\ArticleController@kill')->name('article.kill');
    Route::resource('/article', 'Admin\ArticleController');

    //meesagge
    Route::resource('/message', 'Admin\MessageController');

    //users
    Route::resource('/user', 'Admin\UserController');

    //SMS broadcasting

    Route::get('/sms', 'Admin\SmsBroadcastingController@index')->name('sms.index');
});
