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

    Route::get('/vente', 'VenteController@create');
    Route::post('/vente', 'VenteController@store');
    Route::get('/vente/delete/{id}','VenteController@delete');

    Route::get('/avenant', 'AvenantController@create');
    Route::post('/avenant', 'AvenantController@store');
    Route::get('/avenant/delete/{id}','AvenantController@delete');

    Route::get('admin/index', 'AdminController@index');
    Route::get('redaction/index', 'AdminController@redaction');

    Route::get('redaction/create', 'AdminController@createPost');
    Route::get('redaction/admin', 'AdminController@getAllPosts');


});