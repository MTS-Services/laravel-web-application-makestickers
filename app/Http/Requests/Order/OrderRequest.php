<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        'order_number' => 'required|unique:orders,order_number,' . $this->id,
        'status' => 'required|integer|in:0,1,2,3',
        'total_items' => 'required|integer|min:1',
        'amount' => 'required|integer|min:0',
        'tax_total' => 'nullable|integer',
        'discount_total' => 'nullable|integer',
        'shipping_total' => 'nullable|integer',
        'user_id' => 'required|exists:users,id',
        'product_id' => 'required|exists:products,id',
        'payment_method_id' => 'required|exists:payment_methods,id',
        'billing_address_id' => 'required|exists:billing_addresses,id',
        'shipping_address_id' => 'required|exists:shipping_addresses,id',
        ];
    }
}
