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

Route::prefix('admin')->namespace('Admin')->as('admin.')->middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@get')->name('home');

    Route::get('/menu', 'MenuController@get')->name('menu');
    Route::post('/menu/categories', 'MenuController@addCategory')->name('menu.categories.save');
    Route::delete('/menu/categories/{id}', 'MenuController@deleteCategory')->name('menu.categories.delete');
    Route::post('/menu/items', 'MenuController@addMenuItem')->name('menu.items');

});

