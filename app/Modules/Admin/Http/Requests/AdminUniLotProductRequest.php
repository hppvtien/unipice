<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniLotProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'qty'=>'required',
            'barcode'=> 'required',
            'expriry_date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'qty.required'=> 'Dữ liệu không được để trống',
            'barcode.required'=> 'Bạn chưa nhập mã vạch',
            'expriry_date.required' => 'Dữ liệu không được để trống',
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
