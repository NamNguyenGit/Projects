<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'content' => 'required',
            'file_upload' => 'mimes:jpg,jpeg,png,gif'
        ];
    }
    public function messages()
    {
        return [
            'file_upload.mimes' => 'Image type must be jpg,jpeg,png,gif'
        ];
    }
}
