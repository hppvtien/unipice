<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniTagRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'desscription'=>'required|min:100|max:150',
            'slug' => 'required|unique:uni_product_category,slug,'.$this->id,
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
