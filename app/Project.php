<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Fillable de objeto
    protected $fillable = [
      'title', 'description','author_id'
    ];
}
