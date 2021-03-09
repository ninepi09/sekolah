<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voting extends Model
{
    use SoftDeletes;
    protected $table = 'votings';
    protected $guarded = [];
}
