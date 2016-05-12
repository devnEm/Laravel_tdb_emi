<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre','intro', 'article','isPublic'
    ];

    public function categorie(){

    	return $this->hasOne('App\Models\Categorie','id','categorie_id');
    }
}
