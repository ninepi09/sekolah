<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }
}
