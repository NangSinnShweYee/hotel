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


Route::get('/room', 'MainController@room');
Route::get('/bus', function(){
	return view('frontend/bus');
});

Route::get('/hall', function(){
	return view('frontend/hall');
});

Route::get('/dining', function(){
	return view('frontend/dining');
});


Route::get('/admin', function () {
    return view('backend/first');
})->name('admin');

Route::resource('room_categories', 'RoomCategoryController');
Route::resource('rooms', 'RoomController');
Route::resource('room_bookings', 'RoomBookingController');
Route::resource('halls', 'HallController');
Route::resource('bus_packages', 'BusPackageController');
Route::resource('dinings', 'DiningController');




//Route::get('/room','FrontendController@room');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
