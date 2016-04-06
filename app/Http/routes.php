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

Route::get('/', 'WelcomeController@welcome');

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/vente', 'HomeController@getVente');
    Route::post('/vente', 'HomeController@postVente');


});