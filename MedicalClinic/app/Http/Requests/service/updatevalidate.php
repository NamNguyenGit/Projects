<?php

namespace App\Http\Requests\service;

use Illuminate\Foundation\Http\FormRequest;

class updatevalidate extends FormRequest
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
            'name' => 'required|unique:service,name,' . request()->id,
            'price' => 'required',
            'benefit' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name required',
            'name.unique' => 'Service already taken',
            'price.required' => 'Price required',
            'benefit.required' => 'Benefit required',
        ];
    }
}
