<?php

namespace App\Models;

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
        return $this->hasOne('App\Models\Produit','id','produit_id');
    }


}
