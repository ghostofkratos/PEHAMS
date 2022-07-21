<?php

namespace App\Http\Requests\Hostels;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHostelsRequest extends FormRequest
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
            'name' => 'required',
            'location' => 'required',
            'contact' => 'required',
            'coordinates' => 'required',
            'gender' => 'required',
            'price' => 'required'
        ];
    }
}
