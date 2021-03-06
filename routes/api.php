<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('authenticate', 'AuthController@auth');
Route::group(['middleware' => ['auth:api']], function () {
    Route::get('opiniao', 'TableController@index');
    Route::get('dtvisitaobra', 'TableController@visit');
    Route::get('dtdesligamento', 'TableController@shutdown_by_date');
    Route::get('dtentrega', 'TableController@delivery_date');
});

