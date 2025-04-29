<?php

namespace App\Models;

use App\Models\BaseModel;

class Product extends BaseModel
{
    protected $table = 'products';


    protected $fillable = [
        'title',
        'third_category_id',
        'size_categories_id',
        'admin_id',
        'unit_price',
        'description',
        'preview_image',

        'created_by',
        'updated_by',
        'deleted_by',

        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function stickerCategory()
    {
        return $this->belongsTo(StickerCategory::class);
    }
    public function labelCategory()
    {
        return $this->belongsTo(LabelCategory::class);
    }
    public function SizeCategory()
    {
        return $this->belongsTo(SizeCategory::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
