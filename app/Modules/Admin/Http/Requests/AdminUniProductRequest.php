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
            // 'trade' => 'required|not_in:0',
            // 'size' => 'required|not_in:0',
            // 'color' => 'required|not_in:0',
            'meta_title' => 'required|max:70',
            'meta_desscription' => 'required|max:150',

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
            'tags.required' => 'Tag không được để trống',
            // 'trade.not_in' => 'Thương hiệu không được để trống',
            // 'size.not_in' => 'Kích thước không được để trống',
            // 'color.not_in' => 'Màu sắc không được để trống',
            'meta_title.required' => 'Tiêu đề seo không được để trống',
            'meta_desscription.required' => 'Mô tả seo không được để trống',
            'meta_title.max' => 'Tiêu đề seo không quá 70 ký tự',
            'meta_desscription.max' => 'Mô tả seo không quá 150 ký tự',
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
