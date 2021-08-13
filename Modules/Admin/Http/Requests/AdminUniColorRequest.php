<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniColorRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'desscription'=>'required|min:100|max:150',
            'slug' => 'required|unique:uni_color,slug,'.$this->id,
            'content'=>'required',
            'code_color'=>'required',
            'meta_title'=>'required|min:50|max:70',
            'meta_desscription'=>'required|min:100|max:150',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'desscription.required' => 'Dữ liệu không được để trống',
            'desscription.min'=> 'Mô tả phải có ít nhất 100 lý tự',
            'desscription.max'=> 'Mô tả chỉ được tối đa 150 ký tự',
            'slug.required' => 'Dữ liệu không được để trống',
            'slug.unique'   => 'Slug đã tồn tại',
            'content.required' => 'Nội dung không được để trống',
            'code_color.required' => 'Mã màu không được để trống',

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
