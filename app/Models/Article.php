<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
