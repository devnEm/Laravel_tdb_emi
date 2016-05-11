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
use Carbon\Carbon;

setlocale(LC_TIME, 'fr_FR.utf8');
Carbon::setLocale('fr');

Route::get('/', 'WelcomeController@welcome');
Route::get('redaction/article/{id}', 'BlogController@showPost');
Route::auth();

Route::group(['middleware' => ['auth']], function () {



    Route::get('home', 'HomeController@index');

    Route::get('vente', 'VenteController@create');
    Route::post('vente', 'VenteController@store');
    Route::get('vente/delete/{id}','VenteController@delete');

    Route::get('avenant', 'AvenantController@create');
    Route::post('avenant', 'AvenantController@store');
    Route::get('avenant/delete/{id}','AvenantController@delete');

    Route::get('admin/index', 'AdminController@index');

    Route::get('redaction/index', 'BlogController@redaction');

    Route::get('redaction/article/delete/{id}', 'BlogController@deletePost');
    Route::get('redaction/article/edit/{id}', 'BlogController@editPost');
    Route::post('redaction/article/edit/{id}', 'BlogController@updatePost');
    Route::get('redaction/create', 'BlogController@createPost');
    Route::post('redaction/create', 'BlogController@storePost');
    Route::get('redaction/admin', 'BlogController@getAllPosts');

    Route::get('redaction/category', 'BlogController@createCategory');
    Route::post('redaction/category', 'BlogController@storeCategory');


});