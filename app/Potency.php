<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class Potency extends Model
{
    use MultitenantableTrait;
    protected $table = 'potency';
    // untuk menambahkan ke api
    protected $with = ['category'];

    public function category()
    {
        return $this->hasOne(PotencyCategory::class, 'id', 'potency_category_id');
        // return $this->belongsTo(ProductCategory::class, 'product_category', 'id');
    }
}
