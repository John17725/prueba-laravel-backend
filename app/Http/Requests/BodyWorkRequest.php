<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BodyWorkRequest extends FormRequest
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
            'nameCarroceria' => 'required',
        ];
    }

    public function messages(){
        return [
            'nameCarroceria.required' => 'No deje el campo vacio',
        ];
    }
}
