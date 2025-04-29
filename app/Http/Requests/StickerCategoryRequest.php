<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

<<<<<<<< HEAD:app/Http/Requests/LabelCategoryRequest.php
class LabelCategoryRequest extends FormRequest
========
class StickerCategoryRequest extends FormRequest
>>>>>>>> wasif:app/Http/Requests/StickerCategoryRequest.php
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
<<<<<<<< HEAD:app/Http/Requests/LabelCategoryRequest.php
            'slug' => 'required|string|min:5|unique:label_categories,slug',
========
            'slug' => 'required|string|min:5|unique:sticker_categories,slug',
>>>>>>>> wasif:app/Http/Requests/StickerCategoryRequest.php
        ];
    }

    protected function update(): array
    {
        return [
<<<<<<<< HEAD:app/Http/Requests/LabelCategoryRequest.php
            'slug' => 'required|string|min:5|unique:label_categories,slug,' . decrypt($this->route('label_category')),
========
            'slug' => 'nullable|string|min:5|unique:sticker_categories,slug,' . decrypt($this->route('sticker_category')),
>>>>>>>> wasif:app/Http/Requests/StickerCategoryRequest.php
        ];
    }
}
