<?php

namespace App;

use App\Models\Siswa;
use App\Models\Superadmin\Sekolah;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['siswa_id', 'id_sekolah', 'name', 'username', 'nis', 'password', 'role_id'];

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //user.php
    public function getRedirectRouteByRole() {
        if (!Auth::check()) {
            return route('/');
        } else if ($this->hasRole('admin')) {
            return route('admin.index');
        } else if ($this->hasRole('superadmin')) {
            return route('superadmin.index');
        } else if ($this->hasRole('siswa')) {
            return route('siswa.index');
        } else if ($this->hasRole('guru')) {
            return route('guru.index');
        }  else {
            return route('home');
        }
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasRole($role) {
        $authRole = Role::find(Auth::user()->role_id);
        return $authRole->name === $role;
    }

    public static function sekolah() {
        return self::join('sekolahs', 'users.id_sekolah', 'sekolahs.id')
            ->where('users.id', auth()->user()->id)
            ->first('sekolahs.*');
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'id', 'siswa_id');
    }
    public function Kelas() {
        return $this->belongsTo('App\Models\TingkatanKelas', 'kelas');
    }
}
