<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'montant','user','produit'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function produits()
    {
        return $this->hasOne('App\Produit');
    }
}
