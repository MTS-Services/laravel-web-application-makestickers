<?php

namespace App\Models;

use App\Models\BaseModel;

class StickerTypeShape extends BaseModel
{
    protected $fillable = [
        'sticker_type_id',
        'sticker_shape_id',

        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function stickerType()
    {
        return $this->belongsTo(StickerType::class, 'sticker_type_id');
    }

    /**
     * Get the shape associated with this relation.
     */
    public function stickerShape()
    {
        return $this->belongsTo(StickerShape::class, 'sticker_shape_id');
    }
}
