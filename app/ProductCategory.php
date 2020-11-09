<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use MultitenantableTrait;
}
