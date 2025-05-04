<?php

namespace App\Models;

use App\Models\BaseModel;

class QuantityTier extends BaseModel
{

    protected $fillable = [
        'min_quantity',
        'max_quantity',
        'price_multiplier',

        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $casts = [
        'min_quantity' => 'integer',
        'max_quantity' => 'integer',
        'price_multiplier' => 'decimal:2',
    ];
}
