<?php

namespace App\Models;

use App\Models\BaseModel;

class FaqCategory extends BaseModel
{
    protected $fillable = ['title', 'slug'];
    
    public function faq()
    {
        return $this->hasMany(Faq::class);
    }
}