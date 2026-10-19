<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
      protected $fillable = [
        'titre','option',
        'description','image',
        'user_id','niveau','montant'
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
