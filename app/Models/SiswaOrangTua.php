<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiswaOrangTua extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    
    protected $casts = [
        'tanggal_lahir_ayah' => 'datetime:d-m-Y',
        'tanggal_lahir_ibu' => 'datetime:d-m-Y'
    ];
}