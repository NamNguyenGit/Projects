<?php

namespace App\Http\Requests\Product;

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
            'name' => 'required|unique:product,name,'.request()->id,
            'category_id' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'numeric',
            'file_upload' => 'mimes:jpg,jpeg,png,gif',
            'color_id' => 'required',
            'size_id' => 'required',
            'quantity' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'file_upload.mimes' => 'Image type must be jpg,jpeg,png,gif'
        ];
    }
}
