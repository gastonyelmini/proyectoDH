<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FriendController extends Controller
{
  protected function showFriends() {
    $user = Auth::user();

    return view('friends', ['user' => $user]);
  }
}
