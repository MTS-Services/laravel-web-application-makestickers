<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends BaseModel
{
    use HasFactory;

    protected $fillable = ['faq_category_id', 'question', 'answer'];

    //Relations
    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class);
    }
}
