<?php

namespace App\Http\Requests\StickerManagement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StickerCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'sometimes|boolean',
        ] + ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store()
    {
        return [
            'slug' => 'required|string|max:255|unique:sticker_categories,slug',
        ];
    }
    protected function update()
    {
        return [
            'slug' => 'required|string|max:255|unique:sticker_categories,slug,' . $this->route('sticker_category'),
        ];
    }
}
