<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myFirstModel extends Model
{
   protected $table = 'registration';
   protected $primaryKey='user_id';
   protected $fillable = ['user_fullname', 'user_name', 'password'];

}

