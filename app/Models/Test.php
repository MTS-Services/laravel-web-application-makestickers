<?php

namespace App\Models;

use App\Models\BaseModel;

class Test extends BaseModel
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image1',
        'image2',
        'video1',
        'video2',
        'pdf1',
        'pdf2',
        'status',
    ];
}
