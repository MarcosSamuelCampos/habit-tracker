<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class habitLog extends Model
{
      protected $fillable = ['user_id','habit_id','completed_at'];


      public function Habit():BelongsTo
      {
            return  $this->belongsTo(Habit::class);    
      }
      public function User():BelongsTo
       {
          return $this->belongsTo(User::class);  
      }
}
