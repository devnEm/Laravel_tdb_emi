<?php

namespace App\Repositories;

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
        return $this->hasOne('App\User');
    }

    public function produit()
    {

        return $this->hasOne('App\Repositories\Produit', 'id','produit_id');

        return $this->hasOne('App\Repositories\Produit','produit_id');

    }

}
