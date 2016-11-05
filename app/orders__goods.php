<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders__goods extends Model
{
    protected $fillable = [
        'order_id', 'good_id', 
    ];
}
