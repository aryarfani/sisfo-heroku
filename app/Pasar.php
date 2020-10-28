<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    protected $table = 'pasar';
    protected $guarded = [];


    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->isoFormat('HH:mm, Do MMMM YYYY');
    }
}
