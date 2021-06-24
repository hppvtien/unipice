<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminFreeBookRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'desscription' => 'required',
            'count_down' => 'required',          
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'desscription.required' => 'Dữ liệu không được để trống',
            'count_down.required' => 'Dữ liệu không được để trống',
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
