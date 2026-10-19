<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
      protected $fillable = [
        'cles','code',
        'titre','prix',
         'condition','user_id',
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
