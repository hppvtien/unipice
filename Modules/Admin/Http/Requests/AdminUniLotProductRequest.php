<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniLotProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'qty'=>'required|min:100|max:150',
            'size'=>'required',
            'barcode'=> 'required',
            'expriry_date' => 'required',
            'tax_code' => 'required|min:10|max:12',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'qty.min'=> 'Mô tả phải có ít nhất 100 lý tự',
            'qty.max'=> 'Mô tả chỉ được tối đa 150 ký tự',
            'qty.required'=> 'Dữ liệu không được để trống',
            'size.required'=> 'Số điện thoại phải có ít nhất 9 lý tự',     
            'barcode.required'=> 'Bạn chưa nhập email',
            'expriry_date.required' => 'Dữ liệu không được để trống',
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
