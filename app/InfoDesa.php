<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class InfoDesa extends Model
{
    use MultitenantableTrait;
    protected $guarded = [];
}