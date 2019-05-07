<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'people_id';

    public function movies(){
        return $this->belongsToMany('App\Movie','movie_people','movie_id','people_id');
    }
}
