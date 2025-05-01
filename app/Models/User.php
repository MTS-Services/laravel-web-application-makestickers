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

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function shippingAddress()
    {
        return $this->hasMany(ShippingAddress::class);
    }

    public function billingAddress()
    {
        return $this->hasMany(BillingAddress::class);
    }

}
