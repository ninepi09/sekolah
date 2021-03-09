<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggaran extends Model
{
    use SoftDeletes;

	protected $fillable = [
        'name', 'poin'
    ];
    protected $guarded = [];
}
