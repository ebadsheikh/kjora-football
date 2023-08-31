<?php

namespace App\Http\Requests\Admin\Stadium;

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
            'name' => 'required|unique:stadium,name|min:3|max:30',
            'address' => 'required|min:10|max:250',
            'country_id' => 'required',
            'date' => 'required',
            'status' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ];
    }
}
