<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutreFormation extends Model
{
     protected $fillable = [
        'sous_titre','numero',
        'titre','texte',
        'user_id','image'
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
