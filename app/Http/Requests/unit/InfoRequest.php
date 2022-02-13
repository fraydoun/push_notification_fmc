<?php

namespace App\Http\Requests\unit;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'unit_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'unit_id.required' => 'ایدی واحد الزامی میباشد'
        ];
    }
}