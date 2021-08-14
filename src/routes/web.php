<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'larapage.',
    'prefix' => 'larapage',
    'namespace' => 'Boolfalse\Larapage\Http\Controllers',
], function () {
    Route::get('/', 'LarapageController@index');
    Route::get('all', 'LarapageController@index')->name('index');

    Route::get('add', 'LarapageController@add')->name('add');
    Route::post('create', 'LarapageController@create')->name('create');

    Route::get('edit/{item_id}', 'LarapageController@edit')->name('edit');
    Route::post('update', 'LarapageController@update')->name('update');
});
