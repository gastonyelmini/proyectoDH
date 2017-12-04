<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddFriendController extends Controller
{
    protected function showUsers() {
      return view('add-friend');
    }
}
