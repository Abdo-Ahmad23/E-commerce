<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    protected $fillable=[
        'image','title','description','price',
    ];
}