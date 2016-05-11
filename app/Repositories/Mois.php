<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Mois extends Model
{
    protected $fillable = [
        'label'
    ];
    public $timestamps = false;

    public function produit()
    {
        return $this->belongsTo('App\Repositories\Produit');
    }
}
