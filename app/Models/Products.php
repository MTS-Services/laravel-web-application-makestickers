<?php

namespace App\Models;

use App\Models\BaseModel;

class Products extends BaseModel
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
    ];

    public function thirdCategory()
    {
        return $this->belongsTo(ThirdCategory::class);
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
