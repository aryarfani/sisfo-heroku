<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeteranganUsaha extends Model
{
    protected $table = 'surat_keterangan_usaha';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // mengubah format tanggal
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->isoFormat('Do MMMM YYYY, h:mm');
    }
}
