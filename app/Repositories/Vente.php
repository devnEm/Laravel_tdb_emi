<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client','montant','user','produit'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function produit()
    {
        return $this->hasOne('App\Repositories\Produit','id','produit_id');
    }


}
