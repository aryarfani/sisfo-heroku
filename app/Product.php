<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // untuk menambahkan ke api
    protected $with = ['category'];

    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'product_category');
        // return $this->belongsTo(ProductCategory::class, 'product_category', 'id');
    }
}
