<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ms_customer extends Model
{
    protected $table = 'ms_customers';
    protected $primaryKey = 'customer_id';
    protected $keyType = 'string';
    protected $guarded = [''];
    public $incrementing = false;
    public $timestamps = false;
}
