<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/edit-user', 'User_edit_controller@updateUserInfo')->name('edit-user');

/*
Rutas relacionadas con proyectos
*/
Route::get('/add-project', 'AddProjectController@showForm')->name('add-project');

//Post de add-project
Route::post('/add-project', 'AddProjectController@addProject')->name('add-project');

Route::get('/edit-user', 'User_edit_controller@displayView')->name('edit-user');
		
Route::post('/edit-user', 'User_edit_controller@updateUserInfo')->name('edit-user');

