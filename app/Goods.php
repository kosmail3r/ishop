<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = [
        'name', 'img', 'description', 'price', 'categories_id',
    ];

    public function categories() {
    	return $this->belongsTo('App\categories');
    }

    public function coments() {
        return $this->hasMany('App\coments','goods_id','id');
    }
}
