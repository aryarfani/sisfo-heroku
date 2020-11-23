<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class BumdesCategory extends Model
{
    use MultitenantableTrait;
    protected $guarded = [];
}
