<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ms_item extends Model
{
    protected $table = 'ms_items';
    protected $primaryKey = 'item_id';
    protected $keyType = 'string';
    protected $guarded = [''];
    public $incrementing = false;
    public $timestamps = false;
}
