<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleYearRequest extends FormRequest
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
            'nameYear' => 'required|min:2'
        ];
    }
    public function messages()
    {
        return [
            'nameYear.required' => 'No dejes el campo vacio',
            'nameYear.min' => 'Ingresa mas de 3 caracteres',
            
        ];
    }
}
