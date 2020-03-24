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
    return view('index');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/upcomingtrips', function () {
    return view('index');
});

Route::get('/makeyourowntrip', function () {
    return view('makeyourowntrip');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/customerdashboard', function () {
    return view('customerdashboard');
});

Route::get('/admindashboard/edit/{trip_id}', 'AdminDashboardController@edit');

Route::get('/admindashboard/delete/{trip_id}', 'AdminDashboardController@destroy');

Route::get('/admindashboard', 'AdminDashboardController@show');

Route::get('/admindashboard/tripform', function () {
    return view('tripform');
});

Route::post('/admindashboard/edit/updatetrip/{id}', 'AdminDashboardController@update');

Route::post('/admindashboard/addtrip', 'AdminDashboardController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
