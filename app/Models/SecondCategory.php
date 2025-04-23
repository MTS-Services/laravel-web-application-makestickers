<?php

namespace App\Models;

use App\Models\BaseModel;

class SecondCategory extends BaseModel
{
    protected $fillable = [
        'main_category_id',
        'title',
        'slug',
        'description',
        'image',
    ];

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }
}
