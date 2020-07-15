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

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user ' . $name . ' with an id of ' . $id;
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
// Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');
Route::resource('services', 'ServicesController');

Route::resource('beds', 'BedsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
