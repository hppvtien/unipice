<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetRequest extends FormRequest
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

    public function rules()
    {
        return [           
            'emails'    => 'required|email',
        ];
    }

    public function messages()
    {
        return [         
            'emails.required'    => 'Dữ liệu không được để trống',
            'emails.unique'      => 'Dữ liệu đã tồn tại',
        ];
    }
}
