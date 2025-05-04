<?php

namespace App\Http\Requests\StickerManagement;

use Illuminate\Foundation\Http\FormRequest;

class ShapeTypeRequest extends FormRequest
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
                'sticker_type_id' => 'required|exists:sticker_types,id',
                'sticker_shape_id' => 'required|exists:sticker_shapes,id',
          ];

    }
}
