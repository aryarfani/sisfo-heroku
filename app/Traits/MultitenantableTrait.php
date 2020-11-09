<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait MultitenantableTrait
{
    public static function bootMultitenantableTrait()
    {
        if (Auth::guard('web')->check()) {
            // fungsi untuk otomatis menambahkan data pada column desa_id = dari id admin yg login
            static::creating(function ($model) {
                $model->desa_id = Auth::user()->desa;
            });
            // fungsi untuk memfilter data yang keluar dari desa_id
            static::addGlobalScope('desa_id', function (Builder $builder) {
                return $builder->where('desa_id', Auth::user()->desa);
            });
        } else {
            static::creating(function ($model) {
                $model->desa_id = Auth::guard('user')->user()->desa;
            });
            static::addGlobalScope('desa_id', function (Builder $builder) {
                return $builder->where('desa_id', Auth::guard('user')->user()->desa);
            });
        }
    }
}
