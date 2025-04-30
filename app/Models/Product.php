<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Review;

class Product extends BaseModel
{
    use HasFactory;
    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }




    protected $fillable = [
        'title',
        'sticker_category_id',
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
