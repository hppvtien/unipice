<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'content' => 'required',
            'desscription' => 'required|max:250',
            'slug' => 'required|unique:uni_post,slug,' . $this->id,
            'category' => 'required',
            'tags' => 'required', 
            'qty_in_box' => 'required', 
            'min_box' => 'required', 
            'view_price' => 'required', 
            'view_price_sale' => 'required', 
            'view_price_sale_store' => 'required', 
            // 'trade' => 'required|not_in:0',
            // 'size' => 'required|not_in:0',
            // 'color' => 'required|not_in:0',
            'meta_title'=>'required|min:50|max:70',
            'meta_desscription'=>'required|min:100|max:150',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'content.required' => 'Dữ liệu không được để trống',
            'desscription.required' => 'Dữ liệu không được để trống',
            'desscription.max' => 'Dữ liệu không quá 250 ký tự',
            'slug.required' => 'Dữ liệu không được để trống',
            'slug.unique' => 'Slug đã tồn tại',
            'category.required' => 'Danh mục sản phẩm không được để trống',
            'qty_in_box.required' => 'Số lượng trong thùng không được để trống',
            'min_box.required' => 'Số lượng thùng tối thiểu không được để trống',
            'view_price.required' => 'Giá bán lẻ không được để trống',
            'view_price_sale.required' => 'Giá bán Sale không được để trống',
            'view_price_sale_store.required' => 'Giá bán đại lý không được để trống',
            // 'trade.not_in' => 'Thương hiệu không được để trống',
            // 'size.not_in' => 'Kích thước không được để trống',
            // 'color.not_in' => 'Màu sắc không được để trống',
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
