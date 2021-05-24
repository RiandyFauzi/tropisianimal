<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'UserController@home')->name('home');
Route::get('/home', 'UserController@home')->name('home');
Route::get('/tentang', 'UserController@tentang')->name('tentang');
Route::get('/berita', 'UserController@berita')->name('berita');
Route::get('/kontak', 'KontakController@index')->name('kontak');
Route::get('/galeri', 'UserController@galeri')->name('galeri');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile_create','ProfileController@create')->name('profile_create');
Route::get('/profile_edit/{id}', 'ProfileController@edit')->name('profile_edit');
Route::post('/profile_update/{id}','ProfileController@update')->name('profile_update');
Route::get('/profile_delete/{id}','ProfileController@destroy')->name('profile_delete');

Route::get('/news', 'NewsController@index')->name('news');
Route::post('/news_create','NewsController@create')->name('news_create');
Route::get('/news_edit/{id}', 'NewsController@edit')->name('news_edit');
Route::post('/news_update/{id}','NewsController@update')->name('news_update');
Route::get('/news_delete/{id}','NewsController@destroy')->name('news_delete');

Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::post('/gallery_create','GalleryController@create')->name('gallery_create');
Route::get('/gallery_edit/{id}', 'GalleryController@edit')->name('gallery_edit');
Route::post('/gallery_update/{id}','GalleryController@update')->name('gallery_update');
Route::get('/gallery_delete/{id}','GalleryController@destroy')->name('gallery_delete');


Auth::routes();


