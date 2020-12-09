<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        // public $fillable = ['name', 'catrgory', 'price'];
        public $guarded = [];
        // protected $guarded = [];
        public $table = 'products';
        public $timestamps = false;
}
