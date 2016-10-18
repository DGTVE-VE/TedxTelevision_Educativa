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

Route::get('/', function () {
    return view('viewTedx/tedx');
});

Route::get('tedx','TedxController@tedx');

Route::get('galeria','TedxController@galeria');

Route::get('programa/{bloq?}', 'TedxController@programa');

Route::match( ["get", "post"], "email", "TedxController@email");
