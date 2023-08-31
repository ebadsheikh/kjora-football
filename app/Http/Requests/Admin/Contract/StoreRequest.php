<?php

namespace App\Http\Requests\Admin\Contract;

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
            'date_of_employment' => 'required',
            'end_of_employment' => 'required',
            'salary' => 'required|numeric',
            'billing_id' => 'required',
            'deadline' => 'required',
            'incomplete_work' => 'required|numeric',
            'public_holiday_applicability' => 'required',
            'public_holiday_extras' => 'required|numeric',
            'leave_entitlements' => 'required|numeric',
            'sick_leave_entitlements' => 'required|numeric',
            'position_id' => 'required',
            'access' => 'required',
            'role' => 'required'
        ];
    }
}
