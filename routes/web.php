<?php

Route::get('/', 'Auth\LoginController@showLogin');

Route::get('escritorio', 'EscritorioController@index')->name('escritorio');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');