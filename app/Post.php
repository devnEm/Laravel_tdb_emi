<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre', 'article','isPublic'
    ];

    public function categorie(){

    	return $this->hasOne('App\Categorie','id','categorie_id');
    }
}
