<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShippingAddress extends BaseModel
{
    use SoftDeletes;
    protected $fillable = [
        'creater_id',
        'country',
        'first_name',
        'last_name',
        'street_address',
        'phone',
        'company',
        'state',
        'city',
        'zip_code',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
