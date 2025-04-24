<?php

namespace App\Models;

use App\Models\BaseModel;

class ThirdCategory extends BaseModel
{
    protected $fillable = [
        'name',
        'slug',
        'second_category_id',
        'title',
        'description',
        'image',
    ];

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function secondCategory()
    {
        return $this->belongsTo(SecondCategory::class);
    }
}
