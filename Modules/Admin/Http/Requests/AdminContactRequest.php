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
            'content' => 'required',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ tên không được để trống',
            'email.required' => 'Email không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
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
