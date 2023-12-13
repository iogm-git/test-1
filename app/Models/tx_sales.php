<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tx_sales extends Model
{
    protected $table = 'tx_sales';
    protected $primaryKey = 'sales_id';
    protected $keyType = 'string';
    protected $guarded = [''];
    protected $with = ['customer', 'salesman'];
    public $incrementing = false;
    public $timestamps = false;

    public function customer(): HasMany
    {
        return $this->hasMany(ms_customer::class, 'customer_id', 'customer_id');
    }

    public function salesman(): HasMany
    {
        return $this->hasMany(ms_salesman::class, 'salesman_id', 'salesman_id');
    }
}
