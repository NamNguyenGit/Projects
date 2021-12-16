<?php

namespace App\Http\Requests\register;

use Illuminate\Foundation\Http\FormRequest;

class validateregister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:patient,username,' . request()->id,
            'password' => 'required',
            'name' => 'required',
            'dob' => 'required|before:tomorrow',
            'gender' => 'required',
            'cmnd' => 'required|unique:patient,cmnd,' . request()->id,
            'bhyt' => 'required|unique:patient,bhyt,' . request()->id,
            'phone' => 'required',
            'mail' => 'required',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'username required',
            'username.unique' => 'username has already taken',
            'password.required' => 'password required',
            'name.required' => 'name required',
            'dob.required' => 'dob required',
            'dob.before' => 'dob before tomorrow',
            'gender.required' => 'gender required',
            'cmnd.required' => 'cmnd required',
            'cmnd.unique' => 'cmnd has already taken',
            'bhyt.required' => 'bhyt required',
            'bhyt.unique' => 'bhyt has already taken',
            'phone.required' => 'phone required',
            'mail.required' => 'mail required',
            'address.required' => 'address required',
        ];
    }
}
