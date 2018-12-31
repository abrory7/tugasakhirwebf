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
Route::get('/about', 'link@about')->name('about');
Route::get('/profil/{id}', 'link@profil')->name('profil');
Route::get('profil/{id}/edit', ['uses' => 'link@editprofil']);
Route::put('/profil/updatedProfil', 'insertDB@editProfile')->name('updateProfil');
Route::put('/profil/naikjabatan', 'insertDB@naikjabatan')->name('naikjabatan');
Route::put('/profil/turunjabatan', 'insertDB@turunjabatan')->name('turunjabatan');
Route::put('/profil/turunreputasi/{id}', 'insertDB@turunreputasi')->name('turunreputasi');
Route::put('/profil/tambahreputasi/{id}', 'insertDB@tambahreputasi')->name('tambahreputasi');
//KATEGORI ROUTE
Route::get('/kategori/supernatural', 'link@supernatural')->name('supernatural');
Route::get('/kategori/politik', 'link@politik')->name('politik');
Route::get('/kategori/entertainment', 'link@entertainment')->name('entertainment');
Route::get('/kategori/animals-and-pet', 'link@animals')->name('animals');
Route::get('/kategori/lounge', 'link@lounge')->name('lounge');
Route::get('/kategori/games', 'link@games')->name('games');
//THREAD ROUTE
Route::get('/buatThread', 'forumController@buatThread')->name('buatPost');
Route::get('/thread/{id}', 'link@threadlink')->name('thread');
Route::post('/thread/create', 'insertDB@createThread')->name('newThread');
Route::get('/thread/{id}/edit', 'forumController@editThread')->name('editThread');
Route::put('/thread/updatedThread', 'insertDB@editThread')->name('editThread');
Route::get('thread/{id}/reply', ['uses' => 'link@reply']);
Route::post('/thread/createReply', 'insertDB@newReply')->name('newReply');
Route::get('/thread/{id}/editReply/{replyid}', 'link@editReply')->name('updateReply');
Route::put('/thread/updatedReply', 'insertDB@updateReply')->name('updateReply');

Route::delete('thread/delete/{id}', 'forumController@destroyThread')->name('hapusThread');
