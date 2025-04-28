<?php

namespace App\Models;

use App\Models\BaseModel;

class Blog extends BaseModel
{
    protected $fillable = [
        'title',
        'slug',
        'short_desc',
        'long_desc',
        'featured_image',
        'image',
        'video_url',
        'video_thumbnail',
        'status'

    ];

    protected $appends = [
        'status_text',
    ];


    public const STATUS_PUBLISH = 2;
    public const STATUS_DRAFT = 1;
    public const STATUS_HIDE = 0;

    public function getStatus()
    {
        return [
            self::STATUS_PUBLISH => 'Publish',
            self::STATUS_DRAFT => 'Draft',
            self::STATUS_HIDE => 'Hide'
        ];
    }

    public function getStatusTextAttribute()
    {
        return $this->getStatus()[$this->status] ?? 'Unknown';
    }
}
