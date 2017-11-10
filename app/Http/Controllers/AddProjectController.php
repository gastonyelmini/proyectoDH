<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;

class AddProjectController extends Controller
{
    protected function addProject(Request $request) {

      Project::create([
          'title' => $request['title'],
          'author_id' => auth()->user()->id
      ]);

      // DB::table('projects')->where('id', auth()->user()->id)->update(['title'=>'Hola']);
    }

    //Mostrar el form 
    protected function showForm() {
      return view('project/add-project');
    }
}
