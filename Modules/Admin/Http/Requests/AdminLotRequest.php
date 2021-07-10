<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLotRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'qty' => 'required',
            'lotproduct_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'qty.required' => 'Dữ liệu không được để trống',
            'lotproduct_id.required' => 'Bạn chưa chọn lô sản phẩm nào.'
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
