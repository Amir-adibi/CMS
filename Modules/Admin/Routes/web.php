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

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware('checkAdmin')->group(function () {
    Route::get('/panel', 'AdminController@index')->name('panel');

    Route::resource('/users', 'AdminUserController');
    Route::resource('/posts', 'AdminPostController');
});

//Route::prefix('admin')->name('admin.')->group(function () {
//    Route::get('/panel', 'AdminController@index')->name('panel');
//
//    Route::resource('/users', 'AdminUserController');
//    Route::resource('/posts', 'AdminPostController');
//});
