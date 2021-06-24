<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminContactRequest extends FormRequest
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
            'phone' => 'required|min:10|max:12',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'phone.required' => 'Dữ liệu không được để trống',
            'phone.min' => 'Số điện thoại tối thiểu 10 số',
            'phone.max' => 'Số điện thoại tối đa 12 số',
            'content.required' => 'Dữ liệu không được để trống'
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
