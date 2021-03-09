<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    public function mataPelajaran() {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }
    public function kelas() {
        return $this->belongsTo(TingkatanKelas::class);
    }
}
