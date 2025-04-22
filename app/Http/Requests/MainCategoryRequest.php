<?php

namespace App\Http\Requests;

use App\Models\MainCategory;
use Illuminate\Foundation\Http\FormRequest;

class MainCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ] + 
        ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store(): array
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
        ];
        if ($this->hasFile('image')) {
            $this->handleFileUpload($request, $main_category, 'image', 'images');
        }
    }

    protected function update(): array
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description, 
        ];
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $main_category, 'image', 'images');
        }  
    }
}
