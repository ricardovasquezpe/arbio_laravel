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

Route::get('/', 'Home\HomeController@index');
Route::post('/home/registerMethod', 'Home\HomeController@register');
Route::post('/home/callMeBackMethod', 'Home\HomeController@callMeBack');

Route::get('/login', 'Home\LoginController@index');
Route::post('/login/loginMethod', 'Home\LoginController@login');
