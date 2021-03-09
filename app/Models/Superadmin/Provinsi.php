<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinsi extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::deleting(function ($provinces) {
            foreach ($provinces->kabupatenKotas()->get() as $kabupatenKota) {
                $kabupatenKota->delete();
            }
        });
    }

    public function kabupatenKotas() {
        return $this->hasMany('App\Models\Superadmin\KabupatenKota');
    }
}
