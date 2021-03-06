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

Route::get('/', 'HomeController@index')->name('site.home');
Route::get('/menu', 'MenuController@get')->name('site.menu');
Route::get('/about', function() { return view('site.about'); })->name('site.about');
Route::get('/contact', 'ContactController@get')->name('site.contact');
Route::post('/contact', 'ContactController@save')->name('site.contact.save');

Auth::routes();

Route::prefix('admin')->namespace('Admin')->as('admin.')->middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@get')->name('home');

    Route::get('/menu', 'MenuController@get')->name('menu');
    Route::get('/menu/categories', 'MenuCategoryController@get')->name('menu.categories');
    Route::post('/menu/categories', 'MenuCategoryController@save')->name('menu.categories.save');
    Route::delete('/menu/categories/{id}', 'MenuCategoryController@delete')->name('menu.categories.delete');
    Route::get('/menu/items', 'MenuItemController@get')->name('menu.items');
    Route::post('/menu/items', 'MenuItemController@save')->name('menu.items.save');

    Route::get('/slides', 'HomeSlideController@get')->name('slides');
    Route::post('/slides', 'HomeSlideController@upload')->name('slides.upload');
    Route::delete('/slides/{id}', 'HomeSlideController@delete')->name('slides.delete');

    Route::get('/about', 'AboutController@get')->name('about');
    Route::post('/about', 'AboutController@save')->name('about.save');

    Route::get('/contact', 'ContactController@get')->name('contact');
    Route::delete('/contact/{id}', 'ContactController@delete')->name('contact.delete');

});

