<?php

namespace App\Http\Requests\Admin\Upgrade;

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
            'description' => 'required|array',
            'description.*' => 'string',
            'one_month' => 'required',
            'two_month' => 'required',
            'three_month' => 'required'
        ];
    }
}
