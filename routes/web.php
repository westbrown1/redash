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

//add extra extension to render pure html alongside with php
View::addExtension('html', 'php');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboards', ['uses' => 'DashboardController@index', 'as' => 'dashboards.index']);
Route::get('dashboards/create', ['uses' => 'DashboardController@create', 'as' => 'dashboards.create']);
Route::get('dashboards/{id}', ['uses' => 'DashboardController@show', 'as' => 'dashboards.show']);
Route::post('dashboards/{user_id}', ['uses' => 'DashboardController@store', 'as' => 'dashboards.store']);
Route::put('dashboards/{id}', ['uses' => 'DashboardController@update', 'as' => 'dashboards.update']);
Route::get('dashboards/{id}/edit', ['uses' => 'DashboardController@edit', 'as' => 'dashboards.edit']);
Route::get('dashboards/{id}/delete', ['uses' => 'DashboardController@destroy', 'as' => 'dashboards.destroy']);

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

Route::get('events', 'EventController@index')->name('events.index');
Route::post('events/{user_id}', 'EventController@store')->name('events.store');

Route::get('map', function() {
	return view('map');
});

Route::get('example', function() {
	return view('example');
});

Route::get('anothermap', function() {
	return view('anothermap');
});

Route::resource('maps', 'MapController');

Route::get('events', 'EventController@index');
Route::post('events/{user_id}', 'EventController@store')->name('events.store');

Route::get('index', ['uses' => 'EventController@directory', 'as' => 'events.index']);
Route::put('events/{id}', ['uses' => 'EventController@update', 'as' => 'events.update']);
Route::get('events/{id}/edit', ['uses' => 'EventController@edit', 'as' => 'events.edit']);
Route::get('events/{id}/delete', ['uses' => 'EventController@destroy', 'as' => 'events.destroy']);
