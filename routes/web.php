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

Route::get('/room', function () {	
    return view('frontend/room');
});

Route::get('/admin', function () {
    return view('backend/first');
});

Route::resource('room_categories', 'RoomCategoryController');
Route::resource('rooms', 'RoomController');

//Route::get('/room','FrontendController@room');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
