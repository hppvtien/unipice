<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'     => 'required|min:6|max:20',
            'email'    => 'required|email|unique:users',
            'phone'    => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:11',
            'address'    => 'required',
            'password' => [
                'required',
                'string',
                'min:10',       
                'regex:/[a-z]/',  
                'regex:/[A-Z]/',    
                'regex:/[0-9]/',     
                'regex:/[@$!%*#?&]/',
            ],
            'password_confirmation'=>'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Dữ liệu không được để trống',
            'name.min' => 'Name phải có ít nhất 6 lý tự',
            'name.max' => 'Name chỉ được tối đa 30 ký tự',
            'email.required'    => 'Dữ liệu không được để trống',
            'email.unique'      => 'Dữ liệu đã tồn tại',
            'email.email' => 'Bạn chưa nhập đúng email',
            'phone.required'    => 'Dữ liệu không được để trống',
            'phone.min' => 'Số điện thoại phải có ít nhất 9 lý tự',
            'phone.max' => 'Số điện thoại chỉ được tối đa 11 ký tự',
            'phone.regex' => 'Số điện thoại chỉ được nhập số từ 0 - 9',
            'address.required' => 'Dữ liệu không được để trống',
            'password.required' => 'Dữ liệu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 10 ký tự',
            'password.regex' =>  [
                '<br>Phải chứa ít nhất một chữ cái thường',
                '<br>Phải chứa ít nhất một chữ cái viết hoa',
                '<br>Phải chứa ít nhất một chữ số',
                '<br>Phải chứa một ký tự đặc biệt',
            ],
            'password_confirmation.required'=> 'Bạn chưa nhập lại mật khẩu',
            'password_confirmation.same'=> 'Mật khẩu nhập lại chưa đúng', 
        ];
    }
}
