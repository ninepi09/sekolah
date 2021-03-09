<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemilihan extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'posisi', 'start_date', 'end_date'
    ];
    protected $table = "pemilihan_kandidats";
    protected $guarded = [];
}
