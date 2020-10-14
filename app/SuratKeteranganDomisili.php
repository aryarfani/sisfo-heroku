<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeteranganDomisili extends Model
{
    protected $table = 'surat_keterangan_domisili';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
