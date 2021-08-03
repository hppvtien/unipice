<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'store_name'=> 'required',
            'store_area'=> 'required',
            'store_address'=>'required',
            'store_province'=> 'required',
            'store_phone'=>'required',
            'store_taxcode'=>'required|min:10|max:12',
        ];
    }
    public function messages()
    {
        return [
            'store_name.required'=> 'Nội dung không được bỏ trống',
            'store_area.required'=> 'Nội dung không được bỏ trống',
            'store_address.required'=> 'Nội dung không được bỏ trống',
            'store_province.required'=> 'Nội dung không được bỏ trống',
            'store_phone.required'=> 'Nội dung không được bỏ trống',
            'store_taxcode.required'=> 'Nội dung không được bỏ trống',
            'store_taxcode.min'=> 'Mã số thuế tối thiểu 10 ký tự',
            'store_taxcode.max'=> 'Mã số thuế tối đa 12 ký tự'
        ];
    }
   
   
}
