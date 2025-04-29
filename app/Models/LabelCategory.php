<?php

namespace App\Models;

use App\Models\BaseModel;
use PhpParser\Node\Stmt\Label;

class LabelCategory extends BaseModel
{
    protected $table = 'label_categories';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
    ];

    public function label()
    {
        return $this->hasMany(Product::class, 'label_category_id');
    }
}
