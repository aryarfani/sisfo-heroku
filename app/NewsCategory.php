<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use MultitenantableTrait;
    protected $table = 'news_category';
    protected $guarded = [];
}
