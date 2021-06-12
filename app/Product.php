<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [ 'name', 'price', 'discount', 'text', 'img', 'created_at', 'updated_at'];
}
