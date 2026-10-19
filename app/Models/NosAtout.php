<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NosAtout extends Model
{
    protected $fillable = [
        'cles','numero',
        'titre','texte',
         'delais','user_id',
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
