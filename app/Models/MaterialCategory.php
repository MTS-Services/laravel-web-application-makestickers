<?php

namespace App\Models;

use App\Models\BaseModel;

class MaterialCategory extends BaseModel
{
    protected $table = 'material_categories';

    protected $fillable = [
        'title',
        'third_category_id',
        'slug',
        'description',
        'image',
    ];

    public function thirdCategory()
    {
        return $this->belongsTo(ThirdCategory::class);
    }
}
