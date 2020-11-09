<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class PotencyCategory extends Model
{
    use MultitenantableTrait;
    protected $table = 'potency_category';
    protected $fillable = ['name'];

    public function potency()
    {
        return $this->hasOne('potency');
    }
}
