<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminFlashSaleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'desscription'=>'required',
            'slug' => 'required|unique:uni_flash_sale,slug,'.$this->id,
            'meta_title'=>'required|min:50|max:70',
            'meta_desscription'=>'required|min:100|max:150',
            'qty'=>'required',
            'content'=>'required',
            'sale_off'=>'required',
            'is_flash'=>'required',
            'product_sale*'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'product_sale.*.required' => 'Dữ liệu không được để trống',
            'desscription.required' => 'Dữ liệu không được để trống',
            'slug.required' => 'Dữ liệu không được để trống',
            'is_flash.required' => 'Dữ liệu không được để trống',
            'slug.unique'   => 'Slug đã tồn tại',
            'qty.required' => 'Số lượng không được để trống',
            'content.required' => 'Nội dung không được để trống',
            'sale_off.required' => 'Hạn combo không được để trống',
            'meta_title.required' => 'Tiêu đề SEO không được để trống',
            'meta_title.min'   => 'Tiêu đề SEO không được nhỏ hơn 50 ký tự',
            'meta_title.max'   => 'Tiêu đề SEO không được lớn hơn 70 ký tự',
            'meta_desscription.required' => 'Mô tả SEO không được để trống',
            'meta_desscription.min'   => 'Tiêu đề SEO không được nhỏ hơn 100 ký tự',
            'meta_desscription.max'   => 'Tiêu đề SEO không được lớn hơn 150 ký tự',
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
