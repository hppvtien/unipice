<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'j_fullname' => 'required',
            'j_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:12',
            'j_email'=> 'required|email',
            'j_address' => 'required',
            'j_file_cv' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'j_fullname.required' => 'Dữ liệu không được để trống',
            'j_phone.min'=> 'Số điện thoại phải có ít nhất 9 lý tự',
            'j_phone.max'=> 'Số điện thoại chỉ được tối đa 12 ký tự',
            'j_phone.regex'=> 'Số điện thoại chỉ được nhập số từ 0 - 9',           
            'j_email.required'=> 'Bạn chưa nhập email',
            'j_email.email'=> 'Bạn chưa nhập đúng email',
            'j_address.required' => 'Dữ liệu không được để trống',
            'j_file_cv.required' => 'Dữ liệu không được để trống',
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
