<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ms_salesman extends Model
{
    protected $table = 'ms_salesmans';
    protected $primaryKey = 'salesman_id';
    protected $keyType = 'string';
    protected $guarded = [''];
    public $incrementing = false;
    public $timestamps = false;
}
