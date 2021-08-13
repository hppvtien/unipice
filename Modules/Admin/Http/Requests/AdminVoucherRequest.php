<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminVoucherRequest extends FormRequest
{
    public function rules()
    {
        return [
            'code' => 'required|unique:vouchers',
            'model_percent'=>'required|numeric',
            'model_qty'=> 'required|numeric',
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
            'model_percent.numeric'=> 'Phần trăm phải là chữ số',
            'model_qty.required'=> 'Dữ liệu không được để trống',           
            'model_qty.numeric'=> 'Số lượng phải là chữ số',           
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
