<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SecondCategoryRequest extends FormRequest
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
            'main_category_id' => 'required|exists:main_categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ];
    }

    protected function store(): array
    {
        return [
            'slug' => 'required|string|min:5|unique:second_categories,slug',
        ];
    }

    protected function update(): array
    {
        return [
            'slug' => 'nullable|string|min:5|unique:second_categories,slug,' . decrypt($this->route('second_category')),
        ];
    }
}
