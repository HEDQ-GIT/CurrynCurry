<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function tag_names()
    {

    }

}
