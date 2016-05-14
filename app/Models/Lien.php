<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    protected $fillable = [
        'titre', 'url', 'statut','catégorie'
    ];
    public $timestamps = false;
}
