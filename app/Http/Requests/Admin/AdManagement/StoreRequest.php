<?php

namespace App\Http\Requests\Admin\AdManagement;

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
            'name' => 'required|unique:ad_management,name|min:3|max:30',
            'link' => 'required',
            'country_id' => 'required',
            'date_added' => 'required',
            'date_ended' => 'required',
            'cost' => 'required',
            'extra_cost' => 'required',
            'status' => 'required',
            'visibility' => 'required',
            // 'image' => 'required'
        ];
    }
}
