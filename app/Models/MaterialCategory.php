<?php

namespace App\Models;

use App\Models\BaseModel;

class MaterialCategory extends BaseModel
{
    public function card()
    {
        return $this->hasMany(Cart::class);
    }
}
