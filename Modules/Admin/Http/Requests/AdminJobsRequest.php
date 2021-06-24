<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminJobsRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'desscription'=>'required|min:100|max:150',
            'content' => 'required',           
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:12',
            'email'=> 'required|email',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'desscription.min'=> 'Mô tả phải có ít nhất 100 lý tự',
            'desscription.max'=> 'Mô tả chỉ được tối đa 150 ký tự',
            'content.required' => 'Dữ liệu không được để trống',          
            'phone.min'=> 'Số điện thoại phải có ít nhất 9 lý tự',
            'phone.max'=> 'Số điện thoại chỉ được tối đa 12 ký tự',
            'phone.regex'=> 'Số điện thoại chỉ được nhập số từ 0 - 9',           
            'email.required'=> 'Bạn chưa nhập email',
            'email.email'=> 'Bạn chưa nhập đúng email',
            'address.required' => 'Dữ liệu không được để trống',
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
