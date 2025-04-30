<?php

namespace App\Models;

use App\Models\BaseModel;

class SizeCategory extends BaseModel
{
    public function card()
    {
        return $this->hasMany(Cart::class);
    }
}
