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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
