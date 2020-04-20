<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editUser extends FormRequest
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
            'email'=>'required|min:5',
            'name'=>'required'
        ];
    }
    // messages
    public function messages(){
        return [
            'email.required'=> 'Không được để trống email',
            'email.min'=> 'Tối thiểu phải từ 5 ký tự',
            'name.required'=> 'Không được để trống tên'
        ];
    }
}
