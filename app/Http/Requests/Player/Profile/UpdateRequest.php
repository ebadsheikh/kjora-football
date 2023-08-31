<?php

namespace App\Http\Requests\Player\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

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
            'first_name' => 'required|min:2|max:15',
            'sur_name' => 'required|min:2|max:15',
            'email' => 'required',
            'country_id' => 'required',
            'club_id' => 'required',
            'position_id' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'gender' => 'required'
        ];
    }
}
