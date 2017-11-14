<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;

class AddProjectController extends Controller
{
    protected function addProject(Request $request, \Illuminate\Validation\Factory $validator) {

      Project::create([
          'title' => $request['title'],
          'author_id' => auth()->user()->id
      ]);
		
			$validation = $validator->make($request->all(), [
					'title' => 'required|min:5',		
				]);
				if ($validation->fails()){
					return redirect('/add-task')->back()->withErrors($validation);
				}	

			return redirect('/add-task')->with('title', $request['title']);
      // DB::table('projects')->where('id', auth()->user()->id)->update(['title'=>'Hola']);
    }

    //Mostrar el form 
    protected function showForm() {
      return view('project/add-project');
    }
}
