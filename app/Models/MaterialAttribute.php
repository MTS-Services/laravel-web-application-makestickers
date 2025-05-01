<?php

namespace App\Models;

use App\Models\BaseModel;

class MaterialAttribute extends BaseModel
{
    protected $table = 'material_attributes';

    protected $fillable = [
        'sort_order',
        'name',
    ];
}
