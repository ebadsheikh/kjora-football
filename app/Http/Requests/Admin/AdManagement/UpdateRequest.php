<?php

namespace App\Http\Requests\Admin\AdManagement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use JetBrains\PhpStorm\ArrayShape;

class UpdateRequest extends FormRequest
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
            'name' => [
                Rule::unique('ad_management', 'name')->ignore($this->ad),
            ],
            'link' => 'required',
            'country_id' => 'required',
            'date_added' => 'required',
            'date_ended' => 'required',
            'cost' => 'required',
            'extra_cost' => 'required',
            'status' => 'required',
            'visibility' => 'required'
        ];
    }
}
