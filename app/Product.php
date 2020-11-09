<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use MultitenantableTrait;
    // untuk menambahkan ke api
    protected $with = ['category'];

    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'product_category_id');
        // return $this->belongsTo(ProductCategory::class, 'product_category', 'id');
    }
}
