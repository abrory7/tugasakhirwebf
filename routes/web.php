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
    return view('homeforum');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//HOME ROUTE
Route::get('/', 'link@index')->name('index');
Route::get('/kategori', 'link@kategori')->name('kategori');
Route::get('/radio', 'link@radio')->name('radio');
//KATEGORI ROUTE
Route::get('/kategori/supernatural', 'link@supernatural')->name('supernatural');
Route::get('/kategori/politik', 'link@politik')->name('politik');
Route::get('/kategori/entertainment', 'link@entertainment')->name('entertainment');
Route::get('/kategori/animals-and-pet', 'link@animals')->name('animals');
Route::get('/kategori/lounge', 'link@lounge')->name('lounge');
Route::get('/kategori/games', 'link@games')->name('games');
//BUAT THREAD ROUTE
Route::get('/buatThread', 'forumController@buatThread')->name('buatPost');
