<?php

namespace App\Http\Requests\StickerManagement;

use Illuminate\Foundation\Http\FormRequest;

class StickerTypeRequest extends FormRequest
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
            'category_id'  => 'required|exists:sticker_categories,id',
            'name'         => 'required|string|max:255',
            'description'  => 'nullable|string',
            'thumbnail'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'       => 'sometimes|boolean',
            'is_featured'  => 'sometimes|boolean',
        ] + ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store(): array
    {
        return [
            'slug' => 'required|string|max:255|unique:sticker_types,slug',
        ];
    }
    protected function update(): array
    {
        return [
            'slug' => 'required|string|max:255|unique:sticker_types,slug,' . $this->route('sticker_type'),
        ];
    }
}
