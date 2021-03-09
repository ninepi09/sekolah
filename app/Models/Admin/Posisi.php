<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posisi extends Model
{
    use SoftDeletes;
    protected $table = 'posisi_kandidats';
    protected $fillable = [
        'name', 'sekolah_id'
    ];
    protected $guarded = [];
}
