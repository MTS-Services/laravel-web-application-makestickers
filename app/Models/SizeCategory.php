<?php

namespace App\Models;

use App\Models\BaseModel;

class SizeCategory extends BaseModel
{
    protected $table = 'size_categories';

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
