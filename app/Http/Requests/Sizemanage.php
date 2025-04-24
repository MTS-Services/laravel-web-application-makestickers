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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',

        ] + ($this->isMethod('POST') ? $this->store() : $this->update());
    }
    protected function store(): array
    {
        return [
            'email' => 'required|string|min:8|unique:material_categories,email',
        ];
    }
    protected function update(): array
    {
        return [
            'email' => 'required|string|min:8|unique:material_categories,email,' . $this->route('material_category')->id,
        ];
    }
}
