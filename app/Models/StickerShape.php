<?php

namespace App\Models;

use App\Models\BaseModel;

class StickerShape extends BaseModel
{
    protected $fillable = [
        'name',
        'image',
        'price_modifier',
        'status',

        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $casts = [
        'status' => 'boolean',
    ];

    public function stickerTypeShapes()
    {
        return $this->hasMany(StickerTypeShape::class, 'sticker_shape_id', 'id');
    }

}
