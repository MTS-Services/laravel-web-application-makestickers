<?php

namespace App\Models;

use App\Models\BaseModel;

class TemplateCategory extends BaseModel
{
    protected $guard = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone_number',
        'address',
        'city',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'password' => 'hashed',
    ];
}
