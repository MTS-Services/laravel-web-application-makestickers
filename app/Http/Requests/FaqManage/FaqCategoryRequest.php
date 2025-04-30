<?php

namespace App\Http\Requests\FaqManage;

use Illuminate\Foundation\Http\FormRequest;

class FaqcategoryRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255',
        ]
            + ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store()
    {
        return [
            'slug' => 'required|string|unique:faq_categories,slug',
        ];
    }
    protected function update()
    {
        return [
            'slug' => 'required|unique:faq_categories,slug,' . $this->route('faqcategory'),
        ];
    }
}
