<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenjangPegawai extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
