<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'type' => 'required|integer|in:1,2,3',
            'name' => 'required|string|max:255',
            'account_number' => 'nullable|string|max:255',
            'cvc' => 'nullable|string|max:4',
            'exp_month' => 'nullable|string|max:2',
            'exp_year' => 'nullable|string|max:4',
        ];
    }
}
