<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    protected function showForm() {
      $projects = DB::table('projects')->get();
      return view('project.projects', ['projects' => $projects]);
    }
}
