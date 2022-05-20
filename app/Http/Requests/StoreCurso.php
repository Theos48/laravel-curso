<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //No estoy manejando validancion de usuario de momento
        //
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
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'descripcion' => 'descripcion del curso'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor ingresa el nombre del curso'
        ];
    }
}
