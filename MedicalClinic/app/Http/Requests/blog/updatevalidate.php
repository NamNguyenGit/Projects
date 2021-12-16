<?php

namespace App\Http\Requests\blog;

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
            'title' => 'required|unique:blog,title,' . request()->id,
            'content' => 'required',
            'smallcontent'  => 'required',
            'file_upload' => 'mimes:jpg,jpeg,png,gif',
            'file_upload' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title required',
            'title.unique' => 'Title already taken',
            'content.required' => 'Content required',
            'smallcontent.required'  => 'Smallcontent required',
            'file_upload.mimes' => 'Image type must be jpg,jpeg,png,gif',
            'file_upload.required' => 'Image required',
        ];
    }
}
