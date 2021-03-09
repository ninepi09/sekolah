<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'thumbnail'];
    
    protected $guarded = [];
}
