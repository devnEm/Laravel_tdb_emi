<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mois', 'support', 'indice',
    ];

    public $timestamps = false;

    public function ventes()
    {
        return $this->hasMany('App\Vente');
    }

}
