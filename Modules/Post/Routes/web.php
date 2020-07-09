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

Route::prefix('post')->group(function() {
    Route::get('/chung-cu-mini', 'PostController@Apartments')->name('chung-cu-mini');
    Route::get('/mat-bang', 'PostController@Planes')->name('mat-bang');
    Route::get('/phong-tro', 'PostController@Motel')->name('phong-tro');
    Route::get('/nha-dich-vu', 'PostController@HouseService')->name('nha-dich-vu');
    Route::get('/{slug}/{id}', 'PostController@show');
});

