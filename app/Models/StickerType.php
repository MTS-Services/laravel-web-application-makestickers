<?php

namespace App\Models;

use App\Models\BaseModel;

class StickerType extends BaseModel
{

    protected $fillable = [
        'sort_order',
        'category_id',
        'name',
        'slug',
        'description',
        'thumbnail',
        'status',
        'is_featured',
        
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_featured' => 'boolean',
    ];

    // Relationship with StickerCategory
    public function category()
    {
        return $this->belongsTo(StickerCategory::class, 'category_id');
    }

    // Admin audit columns are handled automatically in boot method of a trait
}
