<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillRequest extends FormRequest
{
    public function rules()
    {
        return [
            'method_address' => 'required',
            'method_company' => 'required',
            'method_customer_code' => 'required|min:10|max:12',

        ];
    }

    public function messages()
    {
        return [
            'method_address.required' => 'Dữ liệu không được để trống',
            'method_company.required' => 'Dữ liệu không được để trống',
            'method_customer_code.required' => 'Dữ liệu không được để trống',
            'method_customer_code.min'=> 'Mã số thuê phải có ít nhất 10 lý tự',
            'method_customer_code.max'=> 'Mã số thuê chỉ được tối đa 12 ký tự',
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
