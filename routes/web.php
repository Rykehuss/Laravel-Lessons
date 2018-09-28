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

Route::group(['middleware' => ['auth']], function () {
//    Route::get('/book', 'BookController@index')->name('book.index');
//    Route::get('/book/create', 'BookController@create')->name('book.create');
//    Route::post('/book', 'BookController@store')->name('book.store');
//    Route::get('/book/{book}', 'BookController@show')->name('book.show');
//    Route::get('/book/{book}/edit', 'BookController@edit')->name('book.edit');
//    Route::put('/book/{book}', 'BookController@update')->name('book.update');
//    Route::delete('/book/{book}', 'BookController@destroy')->name('book.destroy');

    Route::resource('book','BookController');
});