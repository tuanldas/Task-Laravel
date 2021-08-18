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



Route::prefix('tasks')->group(function () {


    Route::get('/', 'ManagementController@lists')->name('list');

    Route::get('{id}/delete/', 'ManagementController@delete')->name('delete');

    Route::match(['get', 'post'],'add', 'ManagementController@edit')->name('add');


    Route::match(['get', 'post'], '{id1}/update/', 'ManagementController@update')->name('update');

});

