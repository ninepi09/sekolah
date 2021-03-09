<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kecamatan extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function kabupatenKota() {
        return $this->belongsTo('App\Models\Superadmin\KabupatenKota');
    }
}
