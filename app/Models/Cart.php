<?php

namespace App\Models;

use App\Models\BaseModel;

class Cart extends BaseModel
{


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
