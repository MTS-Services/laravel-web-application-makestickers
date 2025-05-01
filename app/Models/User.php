<?php

namespace App\Models;

use App\Models\AuthBaseModel;

class User extends AuthBaseModel
{
    protected $fillable = [
        'name',
        'email',
        'image',
        'phone_number',
        'password',
        'gender',
        'dob',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
