<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = [];

    public function beritaCategory()
    {
        return $this->hasOne(NewsCategory::class, 'news_category', 'id');
    }
}
