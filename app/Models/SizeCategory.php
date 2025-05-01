<?php

namespace App\Models;

use App\Models\BaseModel;

class SizeCategory extends BaseModel
{
    protected $fillable = [
        'height',
        'width',
        'sticker_category_id',
        'material_category_id',
        'label_category_id',
    ];

    protected $table = 'size_categories';

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function stickerCategory()
    {
        return $this->belongsTo(StickerCategory::class, 'sticker_category_id');
    }

    public function materialCategory()
    {
        return $this->belongsTo(MaterialCategory::class, 'material_category_id');
    }

    public function labelCategory()
    {
        return $this->belongsTo(LabelCategory::class, 'label_category_id');
    }
}
