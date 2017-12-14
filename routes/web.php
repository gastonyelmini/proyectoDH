<?php
use App\Events\MessagePosted;

Auth::routes();

/*
Home e index
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

/*
Rutas realacionadas con editar usuario
*/
Route::post('/edit-user', 'User_edit_controller@updateUserInfo')->name('edit-user');
Route::get('/edit-user', 'User_edit_controller@displayView')->name('edit-user');
Route::get('/checkEmail', 'Auth\RegisterController@checkEmail');

/*
Rutas realcionadas con Proyectos
*/
Route::get('/get-project-axios/{id}', [
    'middleware' => 'auth',
    'uses' => 'ProjectDisplayController@getProjectAxios'
]);

Route::get('/project-display/{id}', [
    'middleware' => 'auth',
    'uses' => 'ProjectDisplayController@showProject'
]);

Route::get('/update-task-progress/{id}/{newProg}/', [
    'middleware' => 'auth',
    'uses' => 'ProjectDisplayController@updateProgress'
]);

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

Route::get('/add-task', 'AddProjectController@displayTask')->name('add-task');

Route::post('/add-task', 'AddProjectController@addTask')->name('add-task');

Route::get('/delete-project/{id}', [
    'middleware' => 'auth',
    'uses' => 'ProjectController@deleteProject'
]);

Route::get('/collaborators/{id}',[
    'middleware' => 'auth',
    'uses' => 'ProjectController@showCollaborators'
]);

Route::get('/assigned-projects', [
    'middleware' => 'auth',
    'uses' => 'ProjectController@showAssignedProjects'
])->name('assigned-projects');

/*
Rutas relacionadas con amigos
*/
Route::get('/add-friend', [
    'middleware' => 'auth',
    'uses' => 'AddFriendController@showUsers'
])->name('add-friend');

Route::get('/add-friend-axios/{id}', [
    'middleware' => 'auth',
    'uses' => 'AddFriendController@addNewFriend'
]);

Route::get('/delete-friend-axios/{id}', [
    'middleware' => 'auth',
    'uses' => 'FriendController@deleteFriend'
]);

Route::get('/friends', [
    'middleware' => 'auth',
    'uses' => 'FriendController@showFriends'
])->name('friends');

/*
Rutas relaciondas con chat
*/
Route::get('/chat', [
    'middleware' => 'auth',
    'uses' => 'ChatController@showChat'
])->name('chat');

Route::get('messages', function() {
  return App\Message::with('user')->orderBy('id', 'DESC')->get();
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

