<?php

namespace App\Models;

use App\Models\BaseModel;

class Material extends BaseModel
{
    protected $table = 'materials';

    protected $fillable = [
        'sort_order',
        'name',
        'description',
        'price_modifier',
        'icons',
        'status',
    ];
}
