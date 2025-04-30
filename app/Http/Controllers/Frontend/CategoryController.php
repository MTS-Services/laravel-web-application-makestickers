<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SecondCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getSecondCategories($id){
        $data['subcategories'] = SecondCategory::where('main_category_id', $id)->get();
        return response()->json($data);
    }
}
