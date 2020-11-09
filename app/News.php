<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use MultitenantableTrait;
    protected $table = 'news';
    protected $with = ['category'];
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(NewsCategory::class, 'id', 'news_category');
    }
}
