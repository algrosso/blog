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

Route::resource('books','LibroController');
/*
Route::get('/edit/{book}','LibroController@edit')->name('edit');

Route::get('/delete/{book}','LibroController@destroy')->name('delete');

/* 
Route::get('/books','BookController@index')->name('books');

Route::get('/create','BookController@create')->name('create');


Route::patch('/book_u','BookController@update')->name('book_u');
*/
