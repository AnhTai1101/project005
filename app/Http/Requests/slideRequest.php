<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class slideRequest extends FormRequest
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
            'name'=>'required',
            'title'=>'required',
            'image'=>'required'
        ];
    }
    public function messages(){
        return [
            'name.required'=>' Không được để trống tên',
            'title.required'=>'Không được để trống tiêu đề',
            'image.required'=>'Không được để trống ảnh'
        ];
    }
}
