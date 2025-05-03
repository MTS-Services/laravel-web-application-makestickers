<?php

namespace App\Models;

use App\Models\BaseModel;

class StickerTypeMaterial extends BaseModel
{
    protected $fillable = [
        'sticker_type_id',
         'material_id',
         'sort_order',
        ];

        public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', self::STATUS_INACTIVE);
    }

        public function stickerType()
        {
            return $this->belongsTo(StickerType::class);
        }
        public function material()
        {
            return $this->belongsTo(Material::class);
        }
}
