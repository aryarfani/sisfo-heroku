<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class Bumdes extends Model
{
    use MultitenantableTrait;
    protected $guarded = [];
    // untuk menambahkan ke api
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(BumdesCategory::class, 'bumdes_category_id');
    }
}
