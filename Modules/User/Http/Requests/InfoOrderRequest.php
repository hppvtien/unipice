<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'customer_name'=> 'required',
            'email'=> 'required',
            'address'=>'required',
            'type_pay'=> 'required',
            'phone'=>'required',
            'taxcode'=>'required|min:10|max:12',
        ];
    }
    public function messages()
    {
        return [
            'customer_name.required'=> 'Nội dung không được bỏ trống',
            'email.required'=> 'Nội dung không được bỏ trống',
            'address.required'=> 'Nội dung không được bỏ trống',
            'type_pay.required'=> 'Nội dung không được bỏ trống',
            'phone.required'=> 'Nội dung không được bỏ trống',
            'taxcode.required'=> 'Nội dung không được bỏ trống',
            'taxcode.min'=> 'Mã số thuế tối thiểu 10 ký tự',
            'taxcode.max'=> 'Mã số thuế tối đa 12 ký tự'
        ];
    }
   
   
}
