<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestcodeRequest extends FormRequest
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
            're_password'    => 'required|min:10|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',          
        ];
    }

    public function messages()
    {
        return [
            're_password.required' => 'Dữ liệu không được để trống',
            're_password.min' => 'Mật khẩu phải có ít nhất 10 Ký tự',
            're_password.regex' =>  'Mật khẩu phải chứa ít nhất 1 chữ hoa, 1 chữ thường, 1 chữ số và 1 ký tự đặc biệt.',
           
        ];
    }
}
