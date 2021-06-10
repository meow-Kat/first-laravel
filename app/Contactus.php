<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    // $fillable 資料庫才能存     資料表有什麼94都要寫進去 id是主鍵不用寫
    protected $fillable = ['name' ,'email' ,'phone', 'content', 'created_at', 'updated_at'];
}
