<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tx_sub_sales extends Model
{
    protected $table = 'tx_sub_sales';
    protected $guarded = [''];
    protected $with = ['tx_sales', 'item'];
    public $timestamps = false;

    public function item(): HasMany
    {
        return $this->hasMany(ms_item::class, 'item_id', 'item_id');
    }
    public function tx_sales(): HasMany
    {
        return $this->hasMany(tx_sales::class, 'sales_id', 'sales_id');
    }
}
