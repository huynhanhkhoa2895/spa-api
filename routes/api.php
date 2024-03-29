<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(["namespace"=>"App\Http\Controllers\Api"],function($router){
    Route::post('login', 'Verify@login');
    
    Route::group(["prefix"=>"get"],function($router){
        Route::get('banner/{spa}','Banner@getList');
        Route::get('agency/{spa}','Agency@getList');
        Route::get('service/{spa}','Service@getList');
        Route::get('product/{spa}','Product@getList');
        Route::get('schedule/{id}','Schedule@getListWithId');
        Route::get('schedule/{id}/{spa}/{status}','Schedule@getScheduleWithStatus');
        Route::get('spa/{spa}','Spa@get');
    });
    Route::group(["prefix"=>"create"],function($router){
        Route::post('schedule','Schedule@create');
    });
    Route::group(["prefix"=>"update"],function($router){
        Route::put('schedule','Schedule@update');
    });
});

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    // Route::post('login', 'AuthController@login');
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

});
