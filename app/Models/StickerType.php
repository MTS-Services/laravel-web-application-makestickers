<?php

namespace App\Models;

use App\Models\BaseModel;

class StickerType extends BaseModel
{

    protected $fillable = [
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

    // Relationship with StickerTypeShape
    public function stickerTypeShapes()
    {
        return $this->hasMany(StickerTypeShape::class, 'sticker_type_id', 'id');
    }

}
