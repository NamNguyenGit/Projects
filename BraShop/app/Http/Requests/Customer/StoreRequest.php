<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'phone' => 'required|numeric|unique:customer',
            'address' => 'required',
            'email' => 'required|unique:customer',
            'password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'phone.unique' => 'The phone number already exists.',
            'email.unique' => 'The email already exists.',
            'password.min' => 'Password require at least 6 letters or numbers.'
        ];
    }
}
