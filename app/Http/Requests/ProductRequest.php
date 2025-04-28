<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'third_category_id' => 'nullable|exists:third_categories,id',
            'size_categories_id' => 'nullable|exists:size_categories,id',
            'unit_price' => 'required|string',
            'description' => 'nullable|string',
            'preview_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',   

        ];
    }
}
