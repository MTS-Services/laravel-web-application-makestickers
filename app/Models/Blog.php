<?php

namespace App\Models;

use App\Models\BaseModel;

class Blog extends BaseModel
{
    protected $fillable = [
        'title', 'slug', 'short_description', 'long_description',
        'featured_image', 'image', 'video_url', 'video_thumbnail', 'status'
    ];
}
