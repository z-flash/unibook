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
Route::get('/booking', function(){
    return view('booking');
})->name('booking');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hotel', 'PostController@index')->name('hotel');
Route::get('/airline', 'PostController@airline')->name('airline');
Route::get('/taxi', 'PostController@taxi')->name('taxi');
Route::resource('/products', 'ProductController');


