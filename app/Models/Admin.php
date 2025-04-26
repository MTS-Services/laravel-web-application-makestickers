<?php

namespace App\Models;

use App\Models\AuthBaseModel;

class Admin extends AuthBaseModel
{
    protected $guard = 'admin';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'gender',
        'phone',
        'address',
        'image',

        'created_by',
        'updated_by',
        'deleted_by',

        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
