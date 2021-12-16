<?php

namespace App\Http\Requests\Contactus;

use Illuminate\Foundation\Http\FormRequest;

class validatecontactus extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'messages'  => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name required',
            'email.required' => 'Email required',
            'messages.required' => 'Messages required',
        ];
    }
}
