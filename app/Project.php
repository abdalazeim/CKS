<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
     protected $fillable = [
      'name', 'sup','type','status','abstract'
  ];
}
