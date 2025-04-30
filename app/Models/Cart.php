<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends BaseModel
{
    use SoftDeletes;

    protected $table = 'carts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function material()
    {
        return $this->belongsTo(MaterialCategory::class);
    }
    public function size()
    {
        return $this->belongsTo(SizeCategory::class);
    }
}
