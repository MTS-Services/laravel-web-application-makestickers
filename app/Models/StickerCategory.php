<?php

namespace App\Models;

use App\Models\BaseModel;

class StickerCategory extends BaseModel
{
    protected $table = 'sticker_categories';

    public function products()
    {
        return $this->hasMany(Products::class, 'sticker_category_id');
    }
}
