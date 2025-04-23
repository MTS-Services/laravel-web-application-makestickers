<?php

namespace App\Models;

use App\Models\BaseModel;

class MainCategory extends BaseModel
{
    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'image',
    ];

    public function secondCategories()
    {
        return $this->hasMany(SecondCategory::class);
    }

    public function thirdCategories()
    {
        return $this->hasMany(ThirdCategory::class);
    }
}
