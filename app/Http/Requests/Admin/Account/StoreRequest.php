<?php

namespace App\Http\Requests\Admin\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
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
            'first_name' => 'required|min:2|max:15',
            'sur_name' => 'required|min:2|max:15',
            'email' => 'required|unique:users',
            'password' => ['required', Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),
            ],
            'country_id' => 'required',
            'favourite_club_id' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'user_name' => 'required|unique:users',
            'gender' => 'required',
            'qualification' => 'required|min:5|max:30',
            'institution'   => 'required|min:5|max:30',
            'experience'    => 'required|min:20|max:150',
            'skills'    => 'required|min:20|max:150',
        ];
    }
}
