<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'content' => 'required',
            'description' => 'required|max:250',
            'slug' => 'required|unique:uni_post,slug,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'content.required' => 'Dữ liệu không được để trống',
            'description.required' => 'Dữ liệu không được để trống',
            'description.max' => 'Dữ liệu không quá 250 ký tự',
            'slug.required' => 'Dữ liệu không được để trống',
            'slug.unique' => 'Slug đã tồn tại',
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
