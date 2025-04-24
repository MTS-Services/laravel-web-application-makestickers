<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialCategoryRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'third_category_id' => 'required|exists:third_categories,id',
            'description' => 'nullable|string',
        ] + 
        ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store(): array
    {
        return [
            'slug' => 'required|string|min:5|unique:material_categories,slug',
        ];
    }

    protected function update(): array
    {
        return [
            'slug' => 'required|string|min:5|unique:material_categories,slug,' . decrypt($this->route('material_category')),
        ];
    }
}
