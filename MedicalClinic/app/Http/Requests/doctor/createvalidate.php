<?php

namespace App\Http\Requests\doctor;

use Illuminate\Foundation\Http\FormRequest;

class createvalidate extends FormRequest
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
            'specialty_id' => 'required',
            'experience'  => 'required',
            'file_upload' => 'mimes:jpg,jpeg,png,gif',
            'file_upload' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name required',
            'specialty_id.required' => 'Specialty required',
            'experience.required' => 'Experience required',
            'file_upload.mimes' => 'Image type must be jpg,jpeg,png,gif',
            'file_upload.required' => 'Image required',
        ];
    }
}
