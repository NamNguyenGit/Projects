<?php

namespace App\Http\Requests\appointment;

use Illuminate\Foundation\Http\FormRequest;

class validate extends FormRequest
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
            'symptom' => 'required',
            'date' => 'required|after:tomorrow',

        ];
    }
    public function messages()
    {
        return [
            'symptom.required' => 'Symptom required',
            'date.required' => 'Date required',
            'date.after' => 'Date must after yesterday',
        ];
    }
}
