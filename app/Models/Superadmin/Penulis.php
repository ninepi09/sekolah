<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penulis extends Model
{
    protected $table = 'penulises';
    protected $fillable = ['name'];
    use SoftDeletes;
}
