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

Route::get('/home', function () {
    return view('home');
});


Route::get('/admin/home', function () {
    return view('admin.dashboard');
});

Route::get('/admin/alarm', 'AdminController@alarm');
Route::get('/admin/announcement', 'AdminController@announcement');
Route::get('/admin/emergency', 'AdminController@emergency');
Route::get('/admin/settings', 'AdminController@settings');

Route::post('/admin/alarm/add', 'AlarmController@addAlarm')->name('addAlarm');
Route::post('/admin/announcement/add', 'AnnouncementController@addAnnouncement')->name('addAnnouncement');
Route::post('/admin/calendar/add', 'CalendarController@addCalendar')->name('addCalendar');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
