<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email|min:5',
            'password'=> 'required|min:6'
        ];
    }
    // alert errors
    public function messages(){
        return [
            'email.required'=> 'Không được để trống email',
            'email.email'=> 'Phải là dạng email',
            'email.min'=> 'Ít nhất trên 5 ký tự',
            'password.required'=> 'Mật khẩu không được để trống',
            'password.min'=> 'Mật khẩu phải từ 6 ký tự trở lên'
        ];
    }
}
