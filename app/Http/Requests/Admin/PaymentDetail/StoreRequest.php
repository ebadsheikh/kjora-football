<?php

namespace App\Http\Requests\Admin\PaymentDetail;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:25',
            'address' => 'required|min:10|max:140',
            'account_number' => 'required|numeric',
            'payment_method' => 'required',
            'sort_code' => 'required|min:6|max:6',
            'swift_code' => 'required|min:8|max:11',
            'payment_date' => 'required',
        ];
    }
}
