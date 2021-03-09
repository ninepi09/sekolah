<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiswaWali extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'tanggal_lahir_wali' => 'datetime:d-m-Y'
    ];
}