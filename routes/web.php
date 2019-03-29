<?php

use App\Http\Middleware\IsAdmin;

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
Route::get('/history', 'MainController@history');
Route::get('/bus', 'MainController@bus');

Route::get('/hall', 'MainController@hall');
Route::get('/dining', 'MainController@dining');



Route::get('/reports', 'MainController@report');




Route::get('/admin', function () {
    return view('backend/first');
})->name('admin')->middleware('is_admin');

Route::resource('room_categories', 'RoomCategoryController');
Route::resource('rooms', 'RoomController');
Route::resource('room_bookings', 'RoomBookingController');
Route::resource('hall_bookings', 'HallBookingController');
Route::resource('dining_bookings', 'DiningBookingController');
Route::resource('bus_bookings', 'BusBookingController');
Route::resource('halls', 'HallController');
Route::resource('bus_packages', 'BusPackageController');
Route::resource('dinings', 'DiningController');


// Route::resource('booking', 'BookingController');
//Route::get('/room','FrontendController@room');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
