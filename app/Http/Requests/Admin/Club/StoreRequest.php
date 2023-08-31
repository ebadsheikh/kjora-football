<?php

namespace App\Http\Requests\Admin\Club;

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
    #[ArrayShape(['name' => "string", 'image' => "file"])]
    public function rules(): array
    {
        return [
            'country_id' => 'required',
            'name' => 'required',
            'status' => 'required'
        ];
    }
}
