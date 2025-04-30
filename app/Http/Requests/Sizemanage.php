<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sizemanage extends FormRequest
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
            'height' => 'required|string',
            'width' => 'required|string',
            'sticker_category_id' => 'nullable|exists:sticker_categories,id',
            'material_category_id' => 'nullable|exists:material_categories,id',
            'label_category_id' => 'nullable|exists:label_categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
