<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Guru extends Model
{
    protected $fillable = ['nama', 'status_guru', 'is_aktif', 'foto', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pegawai() 
    {
        return $this->belongsTo(Pegawai::class);
    }
}
