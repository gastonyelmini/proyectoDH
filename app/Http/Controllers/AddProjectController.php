<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\User;

class AddProjectController extends Controller
{
    protected function addProject(Request $request, \Illuminate\Validation\Factory $validator) {

      Project::create([
          'title' => $request['title'],
          'description' => $request['description'],
          'state' => 0,
          'author_id' => auth()->user()->id
      ]);

			$validation = $validator->make($request->all(), [
					'title' => 'required|min:5',
          'description' => 'required|min:5',
				]);
				if ($validation->fails()){
					return redirect('/add-task')->withErrors($validation);
				}

			return redirect('/projects')->with('title', $request['title']);
      // DB::table('projects')->where('id', auth()->user()->id)->update(['title'=>'Hola']);
    }

    //Mostrar el form
    protected function showForm() {
      return view('project/add-project');
    }


    public function displayTask() {
      // $projects = DB::table('projects')->where('author_id',auth()->user()->id)->get();
      if(!empty($_GET)) {
        $projects = DB::table('projects')->where('id',$_GET['id'])->get();
      } else {
        $projects = '';
      }
      $tasks = DB::table('tasks')->where('author_id',auth()->user()->id)->get();
      return view('/project/add-task', [
        'projects' => $projects,
        'tasks' => $tasks,
      ]);
    }

    public function addTask(Request $request) {
      Task::create([
        'title' => $request['title'],
        'from' => $request['from'],
        'to' => $request['to'],
        'author_id' => auth()->user()->id,
      ]);
      $taskTitle = $request['title'];
      return redirect()
             ->route('add-task')
             ->with('taskCreated', 'Task ' . $taskTitle . ' created.' );
    }
}
