<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'cles','numero',
        'titre','texte',
        'user_id','image'
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
