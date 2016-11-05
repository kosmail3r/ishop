<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coments extends Model
{
    protected $fillable = [
        'goods_id', 'name', 'text',
    ];

    public function goods() {
        return $this->belongsTo('App\Goods','goods_id','id');
    }
}
