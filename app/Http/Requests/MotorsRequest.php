<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorsRequest extends FormRequest
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
            'nameMotor' => 'required|min:1'
        ];
    }

    public function messages(){
        return [
            'nameMotor.required' => 'No dejes el campo vacio ingresa algun combustible',
            'nameMotor.min' => 'Ingresa mas de 2 caracteres o se mas descriptivo'
        ];
    }
}
