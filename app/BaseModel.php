<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SoftDeletes;

    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];
    protected $hidden = ['deleted_at'];
}
