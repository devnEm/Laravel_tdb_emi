<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mois extends Model
{
    protected $fillable = [
        'label'
    ];
    public $timestamps = false;

    public function produit()
    {
        return $this->belongsTo('App\Models\Produit');
    }
}
