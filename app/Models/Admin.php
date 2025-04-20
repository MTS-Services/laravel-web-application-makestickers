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
    ];
}
