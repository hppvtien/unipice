<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPageRequest extends FormRequest
{
    public function rules()
    {
        return [
            'p_name' => 'required',
            'p_slug' => 'required|unique:pages,p_slug,'.$this->id,
            'p_desscription' => 'required',
            'p_style' => 'required',
            
            'p_title_seo'=>'required|min:50|max:70',
            'p_desscription_seo'=>'required|min:100|max:150',
        ];
    }

    public function messages()
    {
        return [
            'p_name.required' => 'Dữ liệu không được để trống',
            'p_slug.required' => 'Dữ liệu không được để trống',
            'p_slug.unique'   => 'Slug đã tồn tại',
            'p_style.required' => 'Kiểu không được để trống',
            
            'p_title_seo.required' => 'Tiêu đề SEO không được để trống',
            'p_title_seo.min'   => 'Tiêu đề SEO không được nhỏ hơn 50 ký tự',
            'p_title_seo.max'   => 'Tiêu đề SEO không được lớn hơn 70 ký tự',
            'p_desscription_seo.required' => 'Mô tả SEO không được để trống',
            'p_desscription_seo.min'   => 'Tiêu đề SEO không được nhỏ hơn 100 ký tự',
            'p_desscription_seo.max'   => 'Tiêu đề SEO không được lớn hơn 150 ký tự',
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
