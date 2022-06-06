<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieRequest extends FormRequest
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
            'idCarroceria'=> 'required',
            'numberDoors'=> 'required|integer',
            'nameSerie'=> 'required'
        ];
    }

    public function messages(){
        return [
            'idCarroceria.required'=> 'Debes seleccionar una opcion de carroceria',
            'numberDoors.required'=> 'Ingresa un numero de puertas',
            'numberDoors.integer'=> 'Ingresa solo numeros',
            'nameSerie'=> 'Ingresa el nombre de la serie'
        ];
    }
}
