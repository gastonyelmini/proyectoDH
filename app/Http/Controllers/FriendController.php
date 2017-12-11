<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FriendController extends Controller
{
  protected function showFriends() {
    $friends = Auth::user()->getFriends();

    return view('friends', ['friends' => $friends]);
  }
}
