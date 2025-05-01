<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'sort_order',
        'name',
        'width_inches',
        'height_inches',
        'status',
        'created_by',
        'updated_by',
    ];
}
