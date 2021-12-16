<?php

namespace App\Http\Requests\specialty;

use Illuminate\Foundation\Http\FormRequest;

class validateupdate extends FormRequest
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
            'name' => 'required|unique:specialty,name,' . request()->id,
            'specializing' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name required',
            'name.unique' => 'Name already taken',
            'specializing.required' => 'Specializing required',
        ];
    }
}
