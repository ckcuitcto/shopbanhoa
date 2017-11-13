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
        return [
            'txtName' => 'required|unique:type_products,name',
            'fImages' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtName.required' => 'Vui lòng nhập tên thể loại',
            'txtName.unique' => 'Tên đã tồn lại',
            'fImages.required' => 'Chọn hình ảnh'
        ];
    }
}
