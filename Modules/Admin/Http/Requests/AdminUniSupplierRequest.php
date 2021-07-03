<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniSupplierRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:12',
            'tax_code'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:12',
            'email'=> 'required|email',
            'address' => 'required',
            'tax_code' => 'required|min:10|max:12',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'tax_code.min'=> 'Mã số thuế phải có ít nhất 9 lý tự',
            'tax_code.max'=> 'Mã số thuế chỉ được tối đa 12 ký tự',
            'tax_code.regex'=> 'Mã số thuế chỉ được nhập số từ 0 - 9',           
            'phone.min'=> 'Số điện thoại phải có ít nhất 9 lý tự',
            'phone.max'=> 'Số điện thoại chỉ được tối đa 12 ký tự',
            'phone.regex'=> 'Số điện thoại chỉ được nhập số từ 0 - 9',           
            'email.required'=> 'Bạn chưa nhập email',
            'email.email'=> 'Bạn chưa nhập đúng email',
            'address.required' => 'Dữ liệu không được để trống',
            'tax_code.required' => 'Dữ liệu không được để trống',
            'tax_code.min'=> 'Mã số thuê phải có ít nhất 10 lý tự',
            'tax_code.max'=> 'Mã số thuê chỉ được tối đa 12 ký tự',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
