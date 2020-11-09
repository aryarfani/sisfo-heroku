<?php

namespace App;

use App\Traits\MultitenantableTrait;
use Illuminate\Database\Eloquent\Model;

class Ojek extends Model
{
    use MultitenantableTrait;
    protected $table = 'ojek';
    protected $guarded = [];
    protected $with = ['user'];

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->isoFormat('HH:mm, Do MMMM YYYY');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
