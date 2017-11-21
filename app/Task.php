<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  //Fillable de objeto
  protected $fillable = [
    'title', 'from', 'to', 'author_id', 'description' 
  ];
}
