<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requete extends Model
{
   protected $fillable = [
        'titre', 'message','reponse', 'statut'
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
