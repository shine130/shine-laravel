<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'movie_id';

    public function reviews(){
        return $this->hasMany('App\Review','movie_id');
    }

    public function people(){
        return $this->belongsToMany('App\People','movie_people','movie_id','people_id')->withPivot('job');
    }
}
