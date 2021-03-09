<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KabupatenKota extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::deleting(function ($kabupatenKotas) {
            foreach ($kabupatenKotas->kecamatans()->get() as $kecamatan) {
                $kecamatan->delete();
            }
        });
    }

    public function provinsi() {
        return $this->belongsTo('App\Models\Superadmin\Provinsi');
    }

    public function kecamatans() {
        return $this->hasMany('App\Models\Superadmin\Kecamatan');
    }
}
