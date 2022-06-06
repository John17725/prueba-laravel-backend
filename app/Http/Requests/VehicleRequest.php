<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'idMarca' => 'required',
            'idModel' => 'required',
            'idMotor' => 'required',
            'idTraction' => 'required',
            'idYear' => 'required',
            'idGearbox' => 'required',
            'idSerie' => 'required',
            'idPlaces'=> 'required',
            'namePeso' => 'required|integer',
        ];
    }

    public function messages(){
        return [
            'idMarca.required' => 'Debes seleccionar una marca',
            'idModel.required' => 'Debes seleccionar un modelo',
            'idMotor.required' => 'Debes seleccionar un tipo de motor',
            'idTraction.required' => 'Debes seleccionar un tipo de traccion',
            'idYear.required' => 'Debes seleccionar un año del vehiculo',
            'idGearbox.required' => 'Debes seleccionar un tipo de transmision',
            'namePeso.required' => 'Debes ingresar un peso en kg del vehiculo',
            'namePeso.integer' => 'Ingresa solo numeros',
            'idPlaces.required' => 'Debes seleccionar una cantidad de plazas',
            'idSerie.required' => 'Debes seleccionar una serie para el vehiculo'
        ];
    }
}
