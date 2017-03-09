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

Route::get('/bikes',          'BikesController@index');
Route::get('/bikes/{id}',     'BikesController@show');
Route::post('/bikes',         'BikesController@store');
Route::patch('/bikes/{id}',   'BikesController@update');
Route::delete('/bikes/{id}',  'BikesController@destroy');

Route::get('/frames',         'FramesController@index');
Route::get('/frames/{id}',    'FramesController@show');
Route::post('/frames',        'FramesController@store');
Route::patch('/frames/{id}',  'FramesController@update');
Route::delete('/frames/{id}', 'FramesController@destroy');

Route::get('/wheels',         'WheelsController@index');
Route::get('/wheels/{id}',    'WheelsController@show');
Route::post('/wheels',        'WheelsController@store');
Route::patch('/wheels/{id}',  'WheelsController@update');
Route::delete('/wheels/{id}', 'WheelsController@destroy');

/*
 * Add Routes for Seats
 */
