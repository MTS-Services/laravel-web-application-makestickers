<?php

namespace App\Models;

use App\Models\BaseModel;

class SizeCategory extends BaseModel
{
    protected $table = 'size_categories';

    protected $fillable = [
        'name',
        'title',
    ];  

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
