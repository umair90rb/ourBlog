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
Route::get('/', 'PostsController@index')->name('home');
Route::get('posts/create', 'PostsController@create')->name('createPost');
Route::post('posts', 'PostsController@store')->name('storePost');
Route::get('posts/{post}', 'PostsController@show');
Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('posts/tag/{tag}', 'TagsController@index');

Route::get('register', 'RegistrationController@create')->name('register');
Route::post('register', 'RegistrationController@store');


Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy')->name('logout');
