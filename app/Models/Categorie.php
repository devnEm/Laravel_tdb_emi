<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

	protected $fillable = [
        'label'
    ];

    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    

}
