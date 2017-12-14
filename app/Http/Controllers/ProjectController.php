<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    protected function showForm() {
      $projects = DB::table('projects')->where("author_id", auth()->user()->id)->get();
      return view('project.projects', ['projects' => $projects]);
    }

    protected function showAssignedProjects() {
      $tasks_user = [];
      $projects = [];
      $projects_user = DB::table('projects_users')->where("id_user", auth()->user()->id)->get();
      foreach($projects_user as $projectFind) {
        $projects [] = DB::table('projects')->where("id", $projectFind->id_project)->get();
      }
  
      return view('assigned-projects', [
        'projects' => $projects,
        ]);
    }

    public function deleteProject($request) {
      $id = $request;

      DB::table('projects')->where("id", $id)->delete();
      DB::table('tasks')->where("project_id", $id)->delete();
      $response = [
        'ID' => $id,
      ];

      header('Content-Type: application/json');
      echo(json_encode($response));
      exit;
    }

    public function showCollaborators($request) {
      $tasksWithCollaborators = [];
      $collaborators = [];
      $tasks = DB::table('tasks')->where("project_id", $request)->get();
      foreach($tasks as $task) {
        $users = DB::table('tasks_users')->where("id_task", $task->id)->get();
        foreach($users as $user) {
          $collaborators [] = DB::table('users')->where("id", $user->id_user)->get();
        }
        $tasksWithCollaborators [] = [
          'task' => $task,
          'collaborators' => $collaborators 
        ];
      }

      return view('/collaborators', [
        'tasksAndCollaborators' => $tasksWithCollaborators,
      ]);
    }
}
