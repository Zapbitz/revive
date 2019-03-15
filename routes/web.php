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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('client','ClientController');

Route::resource('doctor','DoctorController');

Route::get('/doctors/all','DoctorController@view_doctor');

Route::resource('booking','BookingController');
Route::get('/booking/accept/{id}','BookingController@book_accept');


Route::resource('chats','ChatController');
// Route::get('/send','ChatController@send');
Route::post('send/{id}','ChatController@send');

// Route::post('chats/getChat/{id}','ChatController@getChat');
// Route::post('chats/sendChat','ChatController@sendChat');

Route::resource('blogs','BlogController');

// Route::get('/edit-profile/{$id}','ClientController@edit');
Route::get('/admin-panel','AdminController@index');
Route::get('/admin-panel/booking/{id}','AdminController@booking');

Route::get('/admin-panel/doctor','AdminController@doctor');
Route::get('/admin-panel/report','AdminController@report');
Route::get('/admin-panel/blog','AdminController@blog');
Route::get('/admin-panel/client','AdminController@client');



