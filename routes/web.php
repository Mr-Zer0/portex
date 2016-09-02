<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'as'    => 'admin::',
    'prefix'=> 'admin'
], function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    });

/*******************
* Customer Routes *
*******************/

    Route::group([
        'as'    => 'customers::',
        'prefix'=> 'customers'
    ], function () {

        Route::get('', ['as' => 'index', 'uses' => 'CustomerController@index']);

        Route::get('create', ['as' => 'create', 'uses' => 'CustomerController@create']);
        Route::post('create', ['as' => 'save', 'uses' => 'CustomerController@save']);

        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CustomerController@edit']);
        Route::post('edit/{id}', ['as' => 'update', 'uses' => 'CustomerController@update']);

        Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'CustomerController@delete']);

    });

});
