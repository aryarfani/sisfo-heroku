<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potency extends Model
{
    protected $table = 'potency';
    // untuk menambahkan ke api
    protected $with = ['category'];

    public function category()
    {
        return $this->hasOne(PotencyCategory::class, 'id', 'potency_category_id');
        // return $this->belongsTo(ProductCategory::class, 'product_category', 'id');
    }
}
