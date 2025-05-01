<?php

namespace App\Http\Requests\AdminManage;

use Illuminate\Foundation\Http\FormRequest;

class SizeRequest extends FormRequest
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
                'sort_order' => 'nullable|integer',
                'name' => 'required|string|max:255',
                'width_inches' => 'required|numeric|min:0.01',
                'height_inches' => 'required|numeric|min:0.01',
                'status' => 'required|boolean',
        ];
    }
}
