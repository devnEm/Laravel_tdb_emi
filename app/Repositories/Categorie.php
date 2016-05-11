<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

	protected $fillable = [
        'label'
    ];

    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo('App\Repositories\Post');
    }

    

}
