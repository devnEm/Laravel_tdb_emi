<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avenant extends Model
{
    protected $fillable = [
        'produit_id', 'objectif','realise', 'points'

    ];

    protected $hidden = [
        'user_id'
    ];


    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    public function produit()
    {

        return $this->hasOne('App\Models\Produit', 'id','produit_id');

        return $this->hasOne('App\Models\Produit','produit_id');

    }

}
