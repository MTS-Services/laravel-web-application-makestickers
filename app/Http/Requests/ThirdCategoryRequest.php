<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThirdCategoryRequest extends FormRequest
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
            'second_category_id' => 'required|exists:second_categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]+
        ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store(): array
    
    {
        return [
            'slug' => 'required|string|min:5|unique:third_categories,slug',
        ];
    } 

    protected function update(): array
    {
        return [
            'slug' => 'required|string|min:5|unique:third_categories,slug,' . decrypt($this->route('third_category')),
        ];
    }  
}
