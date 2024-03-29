<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class InfoDesa extends Model
{
    use MultitenantableTrait;
    protected $guarded = [];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id');
    }
}
