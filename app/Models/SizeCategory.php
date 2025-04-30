<?php

namespace App\Models;

use App\Models\BaseModel;

class SizeCategory extends BaseModel
{
    protected $table = 'size_categories';
    public function card()
    {
        return $this->hasMany(Cart::class);
    }
    protected $fillable = [
        'name',
        'title',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
