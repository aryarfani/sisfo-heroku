<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class ImportantNumber extends Model
{
    use MultitenantableTrait;

    protected $fillable = [
        'name',
        'address',
        'phone',
    ];
}
