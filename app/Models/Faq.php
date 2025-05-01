<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends BaseModel
{
    use HasFactory;

    protected $fillable = ['faq_category_id', 'question', 'status', 'answer'];

    //Relations
    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class);
    }


    protected $appends = [
        'faq_status_bg_color',
        'faq_status_text',
    ];


    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    public function getFaqStatus()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_INACTIVE => 'Inactive',
        ];
    }

    public function getFaqStatusBg()
    {
        return [
            self::STATUS_ACTIVE => 'success',
            self::STATUS_INACTIVE => 'warning',
        ];
    }

    public function getFaqStatusTextAttribute()
    {
        return $this->getFaqStatus()[$this->status] ?? 'Unknown';
    }

    public function getFaqStatusBgColorAttribute()
    {
        return $this->getFaqStatus()[$this->status] ?? 'secondary';
    }

    public function getFaqStatusBtnText($currentStatus)
    {
        $statusBtnText = [];

        foreach ($this->getFaqStatus() as $key => $value) {
            if ($key == $currentStatus) {
                continue;
            }

            $statusBtnText[$key] = [
                'text' => $value,
                'class' => $this->getFaqStatusBg()[$key] ?? 'secondary',
            ];
        }
        return $statusBtnText;
    }

}
