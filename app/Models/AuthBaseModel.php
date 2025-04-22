<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AuthBaseModel extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    public function created_by()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
    public function updated_by()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }

    public function deleted_by()
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
}
