<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['auth']], function () {

    Route::get('/logout', 'LoginController@logout');
    Route::Resource('/home', 'HomeController');

});

Route::get('/recovery_password', 'LoginController@recovery_password');
Route::Resource('/login', 'LoginController');

