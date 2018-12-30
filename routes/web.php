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

Route::get('/', 'link@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//HOME ROUTE
Route::get('/kategori', 'link@kategori')->name('kategori');
Route::get('/radio', 'link@radio')->name('radio');
Route::get('/profil/{id}', 'link@profil')->name('profil');
Route::get('profil/{id}/edit', ['uses' => 'link@editprofil']);
//KATEGORI ROUTE
Route::get('/kategori/supernatural', 'link@supernatural')->name('supernatural');
Route::get('/kategori/politik', 'link@politik')->name('politik');
Route::get('/kategori/entertainment', 'link@entertainment')->name('entertainment');
Route::get('/kategori/animals-and-pet', 'link@animals')->name('animals');
Route::get('/kategori/lounge', 'link@lounge')->name('lounge');
Route::get('/kategori/games', 'link@games')->name('games');
//BUAT THREAD ROUTE
Route::get('/buatThread', 'forumController@buatThread')->name('buatPost');
Route::get('/thread/{id}', 'link@threadlink')->name('thread');
Route::post('/thread/create', 'insertDB@createThread')->name('newThread');
Route::get('thread/{id}/reply', ['uses' => 'link@reply']);
Route::post('/thread/createReply', 'insertDB@newReply')->name('newReply');
