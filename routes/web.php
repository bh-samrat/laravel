<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/daily-report', [

	    'as' => 'daily-report',

	    'uses' => 'BannerController@index',

	]);
	Route::get('/test', [

	    'as' => 'test',

	    'uses' => 'BannerController@testtext',

	]);