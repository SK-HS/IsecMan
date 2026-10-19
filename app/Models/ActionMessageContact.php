<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionMessageContact extends Model
{
      protected $fillable = [
        'statut','date','message_contact_id',
        'action','description','user_id',
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function message_contact()
    {
        return $this->belongsTo(MessageContact::class, 'message_contact_id');
    }
}
