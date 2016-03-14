<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('mail','HomeController@f');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('dashboard', function () {
            return view('pages.dashboard');
        });

        Route::get('profile', function () {
            return view('pages.profile');
        });

        Route::get('booking', function () {
            return view('booking',['save' => '']);
        });


    });
    Route::post('booked', 'BookingController@booked');
});
