<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit-user', 'User_edit_controller@displayView')->name('edit-user');
		
Route::post('/edit-user', 'User_edit_controller@updateUserInfo')->name('edit-user');
