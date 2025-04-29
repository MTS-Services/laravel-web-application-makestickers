<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use HasFactory, SoftDeletes;


    protected $appends = [
        'status_text',
        'status_bg',
    ];

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    public function getStatus()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_INACTIVE => 'Inactive',
        ];
    }

    public function getStatusTextAttribute()
    {
        return $this->getStatus()[$this->status] ?? 'Unknown';
    }

    public function getStatusBg()
    {
        return [
            self::STATUS_ACTIVE => 'success',
            self::STATUS_INACTIVE => 'warning',
        ];
    }


    public function getStatusBgAttribute()
    {
        return $this->getStatusBg()[$this->status] ?? 'secondary';
    }

    public function getStatusBtnText($currentStauts)
    {
        $statusBtnText = [];

        foreach ($this->getStatus() as $key => $value) {

            if ($key == $currentStauts) {
                continue;
            }

            $statusBtnText[$key] = [
                'text' => $value,
                'class' => $this->getStatusBg()[$key] ?? 'secondary',
            ];
        }

        return $statusBtnText;
    }
}
