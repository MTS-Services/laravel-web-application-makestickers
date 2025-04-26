<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AuthBaseModel extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

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

    public function creator()
    {
        return $this->morphTo();
    }
    public function updater()
    {
        return $this->morphTo();
    }
    public function deleter()
    {
        return $this->morphTo();
    }

    protected $appends = [
        'created_by_name',
        'updated_by_name',
        'deleted_by_name',
        'creator_name',
        'updater_name',
        'deleter_name',

        'status_text',
        'status_bg_color',

        'gender_name',
    ];

    public function getCreatedByNameAttribute($value)
    {
        return $this->createdBy ? $this->createdBy->name : 'System';
    }
    public function getUpdatedByNameAttribute($value)
    {
        return $this->updatedBy ? $this->updatedBy->name : 'Null';
    }
    public function getDeletedByNameAttribute($value)
    {
        return $this->deletedBy ? $this->deletedBy->name : 'Null';
    }

    public function getCreatorNameAttribute($value)
    {
        return $this->creator ? $this->creator->name : 'Null';
    }
    public function getUpdaterNameAttribute($value)
    {
        return $this->updater ? $this->updater->name : 'Null';
    }
    public function getDeleterNameAttribute($value)
    {
        return $this->deleter ? $this->deleter->name : 'Null';
    }

    public const STATUS_ACTIVE = 2;
    public const STATUS_PENDING = 1;
    public const STATUS_INACTIVE = 0;

    public function getStatus()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_PENDING => 'Pending',
            self::STATUS_INACTIVE => 'Inactive',
        ];
    }

    public function getStatusBg()
    {
        return [
            self::STATUS_ACTIVE => 'success',
            self::STATUS_PENDING => 'info',
            self::STATUS_INACTIVE => 'warning',
        ];
    }

    public function getStatusBtnText($currentStatus)
    {
        $statusBtnText = [];

        foreach ($this->getStatus() as $key => $value) {

            if ($key == $currentStatus) {
                continue;
            }

            $statusBtnText[$key] = [
                'text' => $value,
                'class' => $this->getStatusBg()[$key] ?? 'secondary',
            ];
        }

        return $statusBtnText;
    }

    public function getStatusTextAttribute()
    {
        return $this->getStatus()[$this->status] ?? 'Unknown';
    }

    public function getStatusBgColorAttribute()
    {
        return $this->getStatusBg()[$this->status] ?? 'secondary';
    }

    public const GENDER_MALE = 2;
    public const GENDER_FEMALE = 1;
    public const GENDER_OTHER = 0;

    public function getGenders()
    {
        return [
            self::GENDER_MALE => 'Male',
            self::GENDER_FEMALE => 'Female',
            self::GENDER_OTHER => 'Other',
        ];
    }

    public function getGenderNameAttribute()
    {
        return $this->getGenders()[$this->gender] ?? 'Unknown';
    }
}
