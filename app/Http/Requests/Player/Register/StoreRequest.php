<?php

namespace App\Http\Requests\Player\Register;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use JetBrains\PhpStorm\ArrayShape;

class StoreRequest extends FormRequest
{

    protected function prepareForValidation():void
    {
        $phone_merge = $this->input('phone_code').'-'.$this->input('phone');
        $this->merge([
            'phone_merge' => $phone_merge,
        ]);
    }
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
            // 'first_name' => 'required|min:2|max:15',
            // 'sur_name' => 'required|min:2|max:15',
            // 'email' => 'required|unique:player_management',
            // 'password' => ['required', Password::min(8)
            //     ->mixedCase()
            //     ->letters()
            //     ->numbers()
            //     ->symbols()
            //     ->uncompromised(),
            // ],
            // 'country_id' => 'required',
            // 'club_id' => 'required',
            // 'position_id' => 'required',
            // // 'date_of_birth' => 'required|before:18 years ago',
            // 'phone' => 'required',
            // // 'phone_merge' => 'phone:AUTO,mobile',
            // 'gender' => 'required',
            // 'image' => 'required'
        ];
    }

    // public function message()
    // {
    //     return [
    //         'date_of_birth.before' => 'Your age must be above 18 year'
    //     ];
    // }
}
