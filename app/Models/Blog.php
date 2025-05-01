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

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->appends = array_merge(parent::getAppends(), [
            'blog_status_bg_color',
            'blog_status_text'
        ]);
    }

    public const STATUS_PUBLISH = 2;
    public const STATUS_DRAFT = 1;
    public const STATUS_HIDE = 0;

    public function getBlogStatus()
    {
        return [
            self::STATUS_PUBLISH => 'Publish',
            self::STATUS_DRAFT => 'Draft',
            self::STATUS_HIDE => 'Hide'
        ];
    }
    public function getBlogStatusBg()
    {
        return [
            self::STATUS_PUBLISH => 'success',
            self::STATUS_DRAFT => 'info',
            self::STATUS_HIDE => 'warning'
        ];
    }

    public function getBlogStatusTextAttribute()
    {
        return $this->getBlogStatus()[$this->status] ?? 'Unknown';
    }

    public function getBlogStatusBgColorAttribute()
    {
        return $this->getBlogStatusBg()[$this->status] ?? 'secondary';
    }

    public function getBlogStatusBtnText($currentStatus)
    {
        $statusBtnText = [];

        foreach ($this->getBlogStatus() as $key => $value) {
            if ($key == $currentStatus) {
                continue;
            }

            $statusBtnText[$key] = [
                'text' => $value,
                'class' => $this->getBlogStatusBg()[$key] ?? 'secondary',
            ];
        }
        return $statusBtnText;
    }

    // Blog.php (Model)
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
