<?php
use App\Events\MessagePosted;

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
])->name('projects');

Route::get('/add-friend', [
    'middleware' => 'auth',
    'uses' => 'AddFriendController@showUsers'
])->name('chat');

Route::get('/chat', [
    'middleware' => 'auth',
    'uses' => 'ChatController@showChat'
])->name('chat');

Route::get('messages', function() {
  return App\Message::with('user')->get();
})->middleware('auth');

Route::post('messages', function() {
  $user = Auth::user();

  $message = $user->messages()->create([
    'message' => request()->get('message')
  ]);

  //Anunciar que se envio un nuevo mensaje
  broadcast(new MessagePosted($message, $user))->toOthers();

  return ['status' => 'OK'];
})->middleware('auth');

// Route::get('/add-task', function () {
// 	return view('/project/add-task');
// })->name('add-task');

Route::get('/add-task', 'AddProjectController@displayTask')->name('add-task');

Route::post('/add-task', 'AddProjectController@addTask')->name('add-task');


Route::get('/checkEmail', 'Auth\RegisterController@checkEmail');
