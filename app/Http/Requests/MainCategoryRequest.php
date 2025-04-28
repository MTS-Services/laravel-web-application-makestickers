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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|min:5',
        ] +
            ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store(): array
    {
        return [
            'slug' => 'required|string|max:255|unique:main_categories,slug',
        ];
    }

    protected function update(): array
    {
        return [
            'slug' => 'required|string|max:255|unique:main_categories,slug,' . decrypt($this->route('main_category')),
        ];
    }
}
