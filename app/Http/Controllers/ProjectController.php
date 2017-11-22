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
}
