<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'name','phone','location','amount','address','price','product_id'
    ];
    function product()
    {
        return $this->hasMany(AddProduct::class,'product_id');
    }
}

// string('name');
//             $table->string('phone');
//             $table->text('address');
//             $table->text('location');
//             $table->string('amount');
