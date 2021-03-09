<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nama_siswa', 'tanggal_pelanggaran', 'pelanggaran', 'poin', 'sebab', 'sanksi', 'penanganan', 'keterangan'
    ];
    protected $table = "pelanggaran_siswas";
    protected $guarded = [];
}
