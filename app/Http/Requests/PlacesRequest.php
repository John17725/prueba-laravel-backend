<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlacesRequest extends FormRequest
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
            'namePlace' => 'required|integer|min:1|max:60'
        ];
    }

    public function messages(){
        return [
            'namePlace.required' => 'No dejes el campo vacio',
            'namePlace.min' => 'Minimo debe existir una plaza',
            'namePlace.max' => 'Maximo de plazas 60'
        ];
    }
}
