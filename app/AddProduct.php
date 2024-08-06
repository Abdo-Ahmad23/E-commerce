<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'typeId',
    ];
    function order(){
        return $this->belongsTo(Order::class);

    }
}