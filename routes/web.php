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
    return view('home');
});
//Route::get('/posts', function () {
//    return view('posts');
//});
Route::get('/admin', function () {
    return view('admin');
});
//
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/','PostController@store');
Route::get('/admin', 'PostController@admin');
Route::get('/post/{itemid}', 'PostController@show');

Route::get('/post/{itemid}/edit', 'PostController@edit');

Route::patch('/post/{itemid}', 'PostController@update');
Route::delete('/post/{itemid}', 'PostController@delete');





Route::get('/login', 'UserController@index');
Route::post('/login/checklogin', 'UserController@checklogin');
Route::get('login/logout', 'UserController@logout');

Route::view('/register', 'register');
Route::post('/register/store', 'UserController@store');

