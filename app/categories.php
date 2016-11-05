<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = [
        'id', 'name',
    ];

    public function goods() {
    	return $this->hasMany('App\Goods');
    }
}
