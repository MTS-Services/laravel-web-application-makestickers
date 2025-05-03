<?php

namespace App\Models;

use App\Models\BaseModel;

class Material extends BaseModel
{
    protected $table = 'materials';

    protected $fillable = [
        'name',
        'description',
        'price_modifier',
        'icons',
        'status',

        'created_by',
        'updated_by',
        'deleted_by',

        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
