<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = 'review_id';
    public function movie(){
        return $this->belongsTo('App\Movie','movie_id');
    }
}
