<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminVoucherRequest extends FormRequest
{
    public function rules()
    {
        return [
            'code' => 'required|unique:vouchers',
            'model_percent'=>'required',
            'model_qty'=> 'required',
            'description' => 'required',
            'expires_at' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Dữ liệu không được để trống',
            'code.unique'=> 'Voucher đã tồn tại',
            'model_percent.required'=> 'Dữ liệu không được để trống',
            'model_qty.required'=> 'Dữ liệu không được để trống',           
            'description.required'=> 'Dữ liệu không được để trống',
            'expires_at.required'=> 'Dữ liệu không được để trống',
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
