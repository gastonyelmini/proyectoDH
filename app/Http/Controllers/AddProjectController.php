<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\User;
use Auth;

class AddProjectController extends Controller
{
    protected function addProject(Request $request, \Illuminate\Validation\Factory $validator) {
       
      $project = Project::create([
          'title' => $request['title'],
          'description' => $request['description'],
          'state' => 0,
          'author_id' => auth()->user()->id
      ]);
      

			$validation = $validator->make($request->all(), [
					'title' => 'required|min:5',
          'description' => 'required',
        ]);
				if ($validation->fails()){
					return redirect('/projects')->withErrors($validation);
        }
       
      // dd($request['selectedFriends']);
      foreach($request['selectedFriends'] as $friendId){
        DB::table('projects_users')->insert([
          'id_project' => $project->id,
          'id_user' => $friendId,
        ]);
      }

			return redirect('/projects')->with('title', $request['title']);
      // DB::table('projects')->where('id', auth()->user()->id)->update(['title'=>'Hola']);
    }

    //Mostrar el form
    protected function showForm() {
      $friends = Auth::user()->getFriends();
      return view('project/add-project', [
        'friends' => $friends,
      ]);
    }


    public function displayTask() {
      // $projects = DB::table('projects')->where('author_id',auth()->user()->id)->get();
      if(!empty($_GET)) {
        $projects = DB::table('projects')->where('id',$_GET['id'])->get();
      } else {
        $projects = '';
      }
      $tasks = DB::table('tasks')->where('project_id',$_GET['id'])->get();

      $users = DB::table('projects_users')->where('id_project',$_GET['id'])->get();
      foreach($users as $user) {
        $friends[] = DB::table('users')->where('id',$user->id_user)->get();
      }

      return view('/project/add-task', [
        'projects' => $projects,
        'tasks' => $tasks,
        'friends' => $friends,
      ]);
    }

    public function addTask(Request $request) {
      $task = Task::create([
        'title' => $request['title'],
        'from' => $request['from'],
        'to' => $request['to'],
        'author_id' => auth()->user()->id,
        'project_id' => $request['project_id'],
        'progress' => 0
      ]);

      foreach($request['selectedFriends'] as $friendId){
        DB::table('tasks_users')->insert([
          'id_task' => $task->id,
          'id_user' => $friendId,
        ]);
      }


      $taskTitle = $request['title'];
      return redirect()
             ->route('projects')
             ->with('taskCreated', 'Task ' . $taskTitle . ' created.' );
    }
}
