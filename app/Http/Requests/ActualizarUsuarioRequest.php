<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarUsuarioRequest extends FormRequest
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
            //
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'cuatrimestre' => 'required',
            'rol_id' => 'required|numeric',
            'carrera_id' => 'required|numeric'
        ];
    }
}
