<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{

    use SoftDeletes;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'guard_name',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

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
    ];

    public function getCreatedByNameAttribute()
    {
        return $this->createdBy ? $this->createdBy->name : 'System';
    }

    public function getUpdatedByNameAttribute()
    {
        return $this->updatedBy ? $this->updatedBy->name : 'System';
    }

    public function getDeletedByNameAttribute()
    {
        return $this->deletedBy ? $this->deletedBy->name : 'System';
    }
}
