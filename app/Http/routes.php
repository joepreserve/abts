<?php
Route::resource('/', 'BController' );

Route::get('/login', 'BController@login');

Route::get('/existing', 'BController@exist');

Route::get('/checking', 'BController@check');

Route::post('/login', 'BController@handleLogin');