<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use HasFactory, SoftDeletes;

    public function createdBy()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }

    public function deletedBy()
    {
        return $this->belongsTo(Admin::class, 'deleted_by');
    }

    protected $appends = [
        'created_by_name',
        'updated_by_name',
        'deleted_by_name',

        'status_text',
        'status_bg',
    ];

    public function getCreatedByNameAttribute()
    {
        return $this->createdBy ? $this->createdBy->name : 'System';
    }

    public function getUpdatedByNameAttribute()
    {
        return $this->updatedBy ? $this->updatedBy->name : 'Null';
    }

    public function getDeletedByNameAttribute()
    {
        return $this->deletedBy ? $this->deletedBy->name : 'Null';
    }

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

   


    // public function getTypeBg()
    // {
    //     return [
    //         self::TYPE_TEXT => 'success',
    //         self::TYPE_NUMBER => 'warning',
    //     ];
    // }

    // public function getTypeBgAttribute()
    // {
    //     return $this->getTypeBg()[$this->type] ?? 'secondary';
    // }

    // public function getTypeBtnText($currentStauts)
    // {
    //     $statusBtnText = [];

    //     foreach ($this->getType() as $key => $value) {

    //         if ($key == $currentStauts) {
    //             continue;
    //         }

    //         $statusBtnText[$key] = [
    //             'text' => $value,
    //             'class' => $this->getTypeBg()[$key] ?? 'secondary',
    //         ];
    //     }

    //     return $statusBtnText;
    // }

}
