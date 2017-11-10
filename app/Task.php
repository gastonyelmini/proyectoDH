<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  //Fillable de objeto
  protected $fillable = [
    'title','author_id','description'
  ];
}
