<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addProductRequest extends FormRequest
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
            'name'=> 'required',
            'title'=> 'required',
            'price'=> 'required',
            'description'=> 'required',
            'image1'=> 'required'
        ];
    }
    public function messages(){
        return [
            'name.required'=> 'Không được để trống tên sản phẩm',
            'title.required'=> 'Không được để trống tiêu đề',
            'price'=> 'Vui lòng điền giá sản phẩm',
            'description'=> 'Điền nội dung chi tiết sản phẩm',
            'image1.required'=> ' Cần phải có ảnh chính cho sản phẩm'
        ];
    }
}
