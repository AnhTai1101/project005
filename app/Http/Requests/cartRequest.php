<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cartRequest extends FormRequest
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
            'size_id'=> 'required',
            'color_id'=> 'required',
            'quantity'=> 'min:0'
        ];
    }

    // mess
    public function messages(){
        return [
            'size_id.required'=>'Vui lòng chọn kích cỡ',
            'color_id.required'=>'Không được để trống màu sắc',
            'quantity.min'=>' Không được để số lượng dưới 1'
        ];
    }
}
