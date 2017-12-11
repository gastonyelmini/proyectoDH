<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDisplayController extends Controller
{
    public function showProject() {
        return view('project/project-display');
    }

}
