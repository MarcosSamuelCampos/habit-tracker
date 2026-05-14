<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class habitLog extends Model
{
      protected $fillable = ['user_id','habit_id','completed_at'];
}
