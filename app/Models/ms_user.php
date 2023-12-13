<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ms_user extends Authenticatable
{

    protected $table = 'ms_users';
    protected $primaryKey = 'user_id';
    protected $keyType = 'string';
    protected $guarded = [''];
    public $incrementing = false;
    public $timestamps = false;
}
