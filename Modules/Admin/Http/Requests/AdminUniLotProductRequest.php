<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniLotProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'lot_name' => 'required',
            'barcode'=>'required|min:10|max:13|',
            'sku_lotproduct'=> 'required|min:10|max:13|',
            'qty_box' => 'required',
            'size_box' => 'required',
            'price_lotproduct' => 'required',
            'expiry_date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'lot_name.required' => 'Tên lô sản phẩm không được để trống',
            'barcode.required'=> 'Mã vạch không được để trống',
            'barcode.min'=> 'Mã vạch phải có ít nhất 10 ký tự',
            'barcode.max'=> 'Mã vạch chỉ được tối đa 13 ký tự',
            'sku_lotproduct.required'=> 'Mã lô không được để trống',
            'sku_lotproduct.min'=> 'Mã lô phải có ít nhất 10 ký tự',
            'sku_lotproduct.max'=> 'Mã lô chỉ được tối đa 13 ký tự',
            'qty_box.required' => 'Số thùng không được để trống',
            'size_box.required' => 'Số lượng thùng không được để trống',
            'price_lotproduct.required' => 'Giá nhập không được để trống',
            'expiry_date.required' => 'Dữ liệu không được để trống',
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
