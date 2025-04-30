<?php

namespace App\Models;

use App\Models\BaseModel;

class MaterialCategory extends BaseModel
{
    protected $table = 'material_categories';

    protected $fillable = [
        'title',
        'sticker_category_id',
        'slug',
        'description',
        'image',
    ];

    public function StickerCategory()
    {
        return $this->belongsTo(StickerCategory::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
