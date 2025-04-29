<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShippingAddress extends BaseModel
{
    use SoftDeletes;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
