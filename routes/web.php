<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Rutas realacionadas con editar usuario
Rutas Juan
*/
Route::post('/edit-user', 'User_edit_controller@updateUserInfo')->name('edit-user');
Route::get('/edit-user', 'User_edit_controller@displayView')->name('edit-user');
Route::post('/edit-user', 'User_edit_controller@updateUserInfo')->name('edit-user');

/*
Rutas relacionadas con proyectos
Rutas Gaston
Con 'middleware' => 'auth' evito que el usuario pueda ingresar a
las paginas sin estar logueado
*/
Route::get('/add-project', [
    'middleware' => 'auth',
    'uses' => 'AddProjectController@showForm'
])->name('add-project');
Route::post('/add-project', [
    'middleware' => 'auth',
    'uses' => 'AddProjectController@addProject'
])->name('add-project');
Route::get('/projects', [
    'middleware' => 'auth',
    'uses' => 'ProjectController@showForm'
])->name('project');
// Route::get('/add-task', function () {
// 	return view('/project/add-task');
// })->name('add-task');

Route::get('/add-task', 'addProjectController@displayTask');

Route::post('/add-task', 'addProjectController@addTask');
