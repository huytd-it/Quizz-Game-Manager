<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ten_dang_nhap'=>'required|max:20',
            'mat_khau'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'ten_dang_nhap.required'=>'Chưa nhập tên đăng nhập',
            'mat_khau.required'=>'Chưa nhập mật khẩu',
            'ten_dang_nhap.max'=>'Tên đăng nhập không nhiều hơn 20 kí tự',
        ];
        # code...
    }
}
