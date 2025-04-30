<?php

namespace App\Models;

use App\Models\AuthBaseModel;
use Spatie\Permission\Traits\HasRoles;

class Admin extends AuthBaseModel
{
    use HasRoles;

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
        'role_id',

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

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->appends = array_merge(parent::getAppends(), [
            'role_name',
        ]);
    }

    public function getRoleNameAttribute()
    {
        return $this->role()->pluck('name')->first() ?? 'N/A';
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
