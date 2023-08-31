<?php

namespace App\Http\Requests\Stadium;

use Illuminate\Foundation\Http\FormRequest;

class StoreStadiumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:25',
            'latitude'  => 'required',
            'longitude' => 'required',
            'address' => 'required',
            'status'    => 'required',
            'country'    => 'required',
            'date_added'    => 'required'
        ];
    }
}
