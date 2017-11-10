<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('/edit-user', function (){
  return view('edit-user');
});

Route::post('/edit-user', 'User_edit_controller@updateUserInfo');

/*
Rutas relacionadas con proyectos
*/
Route::get('/add-project', 'AddProjectController@showForm');

//Post de add-project
Route::post('/add-project', 'AddProjectController@addProject');
=======
Route::get('/edit-user', 'User_edit_controller@displayView')->name('edit-user');
		
Route::post('/edit-user', 'User_edit_controller@updateUserInfo')->name('edit-user');
>>>>>>> boolLaravel
