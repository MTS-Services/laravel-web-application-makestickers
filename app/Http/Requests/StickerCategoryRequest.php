<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ] +
        ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store(): array
    {
        return [
            'slug' => 'required|string|min:5|unique:sticker_categories,slug',
        ];
    }

    protected function update(): array
    {
        return [
            'slug' => 'nullable|string|min:5|unique:sticker_categories,slug,' . decrypt($this->route('sticker_category')),
        ];
    }
}
