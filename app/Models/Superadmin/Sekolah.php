<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sekolah extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function users() {
        return $this->hasMany('App\User');
    }
}
