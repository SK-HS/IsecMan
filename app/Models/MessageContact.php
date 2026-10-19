<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageContact extends Model
{
    protected $fillable = [
        'nom','telephone',
        'email','subject',
         'message','statut',
    ];

     public function action_message_contact()
    {
        
        return $this->hasMany(ActionMessageContact::class);
    }

     public function traitement_message_contact(array $data)
    {
        
        DB::transaction(function () use ($data) {
            
             
            $message =MessageContact::where('id', $this->id)
                                            ->lockForUpdate()
                                            ->first();

         
            if (!$message) {
                throw new Exception("Erreur : La logistique de cette requête n'a pas encore été initialisée.");
            }

            $this->update([
                'statut'           => $data['statut'],
            ]);

            ActionMessageContact::create([
                    'statut'           => $data['statut'],
                    'date'      => $data['date'],
                    'action'      => $data['action'],
                    'message_contact_id' => $this->id,
                    'description'       => $data['description'],
                    'user_id'           => Auth::id(),
                ]);

            
            
        }); 
    }
}
