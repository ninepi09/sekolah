<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = [
        'kelas_id', 'tanggal', 'siswa_id', 'status', 'editor_id'
    ];
}
