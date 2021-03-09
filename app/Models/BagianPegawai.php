<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BagianPegawai extends Model
{
    use SoftDeletes;

    protected $table = 'bagian_pegawais';
    protected $fillable = [
        'name', 'user_id'
    ];

    protected $guarded = [];
}
