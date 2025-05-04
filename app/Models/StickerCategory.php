<?php

namespace App\Models;
use App\Models\BaseModel;

class StickerCategory extends BaseModel
{

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',

        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    // Relationship with StickerType
    public function stickerTypes()
    {
        return $this->hasMany(StickerType::class, 'category_id');
    }

}
