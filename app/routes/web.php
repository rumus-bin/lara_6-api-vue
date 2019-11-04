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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/get-json', 'IndexController@getJson')->name('getJson');
Route::get('/get-line-chart', 'ChartsController@getLineChart')->name('getLineChart');
Route::get('/get-pie-chart', 'ChartsController@getPieChart')->name('getPieChart');
Route::get('/get-line-chart-random', 'ChartsController@getLineChartRandom')->name('getPieChartRandom');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('tables')->name('table.')->group(function () {
    Route::get('/', 'TablesController@index')->name('index');
    Route::get('/create', 'TablesController@create')->name('create');
    Route::post('/store', 'TablesController@store')->name('store');
});



