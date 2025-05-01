<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Products;

class Review extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id', 'user_id', 'order_id',
        'rating', 'title', 'comment', 'status'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
