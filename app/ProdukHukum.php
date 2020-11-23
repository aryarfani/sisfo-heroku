<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class ProdukHukum extends Model
{
    use MultitenantableTrait;
}
