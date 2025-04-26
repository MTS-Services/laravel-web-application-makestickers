<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Review;

class Products extends BaseModel
{
    use HasFactory;
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
