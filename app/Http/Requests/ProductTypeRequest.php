<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductTypeRequest extends FormRequest
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
//        'fImages' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        return [
            'txtName' => 'required|unique:type_products,name',
            'fImages' => 'required|mimes:jpeg,png,jpg',
        ];
    }

    public function messages()
    {
        return [
            'txtName.required' => 'Vui lòng nhập tên thể loại',
            'txtName.unique' => 'Tên đã tồn lại',
            'fImages.required' => 'Chọn hình ảnh',
            'fImages.mimes' => 'Chỉ chấp nhận các file jpeg,png,jpg',
        ];
    }
}
