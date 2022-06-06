<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelRequest extends FormRequest
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
            'nameModel' => 'required|min:4'
        ];
    }

    public function messages(){
        return [
            'nameModel.required' => 'No dejes el campo vacio ingresa un moelo',
            'nameModel.min' => 'Ingresa mas de 5 caracteres'
        ];
    }
}
