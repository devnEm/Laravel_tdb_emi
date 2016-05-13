<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requete extends Model
{
   protected $fillable = [
        'titre', 'message','reponse', 'statut'
    ];
}
