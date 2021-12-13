<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarEstudianteRequest extends FormRequest
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
            'matricula'  => 'required|min:5|max:10',
            'nombre'     => 'required|min:3|max:45',
            'app'        => 'required|min:3|max:45',
            'apm'        => 'required|min:3|max:45',
            'salon_id'   => 'required',
            'materia_id' => 'required',
        ];
    }
}
