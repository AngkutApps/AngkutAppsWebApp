<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articel extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'id_category', 'content', 'id_user', 'image'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category', 'id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
