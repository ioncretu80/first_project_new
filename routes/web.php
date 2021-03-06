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



Route::get('/', function () {
    return "aaaaaaaaaaaaaaaaaaaaaaa";
//    return view('welcome');
});

Route::get('/webinars', 'WebinarController@index')->name('webinar.index');
Route::get('/webinars/create', 'WebinarController@create')->name('webinar.create');
Route::post('/webinars', 'WebinarController@store')->name('webinar.store');

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::post('/posts', 'PostController@store')->name('post.store');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.delete');

Route::get('/articols', 'ArticolController@index')->name('articol.index');
Route::get('/articols/create', 'ArticolController@create')->name('articol.create');
Route::post('/articols', 'ArticolController@store')->name('articol.store');
Route::get('/articols/{articol}', 'ArticolController@show')->name('articol.show');
Route::get('/articols/{articol}/edit', 'ArticolController@edit')->name('articol.edit');
Route::patch('/articols/{articol}', 'ArticolController@update')->name('articol.update');







Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');


Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');


