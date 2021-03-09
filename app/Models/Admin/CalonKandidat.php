<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CalonKandidat extends Model
{
    use SoftDeletes;

    protected $table = 'calon_kandidats';
	protected $fillable = [
        'name', 'user_id'
    ];
    protected $guarded = [];
}
