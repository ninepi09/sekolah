<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tingkat extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];
}
