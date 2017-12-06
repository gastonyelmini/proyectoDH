<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;

class AddFriendController extends Controller
{
    protected function showUsers() {
      return view('add-friend');
    }

    public function addNewFriend($request) {

      $actualUser = Auth::user();
      $actualUser->addFriend($request);
    }
}
