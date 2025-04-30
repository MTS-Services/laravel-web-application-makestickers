<?php

namespace App\Models;

use App\Models\BaseModel;

class TemplateCategory extends BaseModel
{
    protected $guard = 'admin';

    protected $fillable = [
        'height',
        'width',
        'size_categories_id',
        'sticker_category_id',
        'material_category_id',
        'label_category_id',
    ];

    protected $table = 'template_categories';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function SizeCategory()
    {
        return $this->belongsTo(SizeCategory::class, 'size_categories_id');
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
