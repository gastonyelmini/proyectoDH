<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Auth;
use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastName', 'phone', 'ocupation', 'description', 'adress', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getProjects() {
      $projects = DB::table('projects')
      ->where('author_id', '=', Auth::user()->id)
      ->get();
      return $projects;
    }

    public function messages() {
      return $this->hasMany(Message::class);
    }

    public function friends() {
      return $this->belongsToMany(User::class, 'friend_user', 'user_id', 'friend_id');
    }

    public function getFriends() {
      return Auth::user()->friends()->get();
    }

    public function addFriend($id) {
      Auth::user()->friends()->attach([$id]);
      //Get the added friend to generate a two way relationship
      DB::table('friend_user')->insert(
        ['friend_id' => Auth::user()->id, 'user_id' => $id]
      );
    }

    public function removeFriend($id) {
      Auth::user()->friends()->detach([$id]);
      DB::table('friend_user')
        ->where('friend_id', '=', Auth::user()->id)
        ->where('user_id', '=', $id)
        ->delete();
    }

    public function syncFriend($id) {
      //Remove old and add user_id = $id
      Auth::user()->friends()->sync([$id]);
    }

}
