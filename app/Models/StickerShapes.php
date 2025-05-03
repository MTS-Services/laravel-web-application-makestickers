<?php

namespace App\Models;

use App\Models\BaseModel;

class StickerShapes extends BaseModel
{
    protected $fillable = [
        'name',
        'image',
        'price_modifier',
        'status',

        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $casts = [
        'status' => 'boolean',
    ];
}
