<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:uni_post_category,slug,'.$this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
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
