<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ojek extends Model
{
    protected $table = 'ojek';
    protected $guarded = [];


    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->isoFormat('HH:mm, Do MMMM YYYY');
    }
}
