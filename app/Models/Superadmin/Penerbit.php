<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerbit extends Model
{
    protected $fillable = ['penerbit', 'tahun'];
    use SoftDeletes;
}
