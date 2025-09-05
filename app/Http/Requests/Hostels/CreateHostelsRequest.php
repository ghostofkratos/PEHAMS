<?php

namespace App\Http\Requests\Hostels;

use Illuminate\Foundation\Http\FormRequest;

class CreateHostelsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:hostels',
            'location' => 'required',
            'contact' => 'required',
            'coordinates' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'gender' => 'required',
            'contact' => 'required'
        ];
    }
}
