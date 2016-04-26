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
        'mois', 'support'
    ];

    public $timestamps = false;

    public function ventes()
    {
        return $this->belongsTo('App\Vente');
    }

    public function mois()
    {
        return $this->hasOne('App\Mois','id');
    }
    
    public function support()
    {
        return $this->hasOne('App\Support','id');
    }

    public function avenant()
    {
        return $this->belongsTo('App\Avenant');
    }


}
