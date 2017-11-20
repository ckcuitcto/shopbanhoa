<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtTitle' => 'required|unique:type_news,title',
            'fImages' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required' => 'Vui lòng nhập tên title',
            'txtTitle.unique' => 'Tên title đã tồn lại',
            'fImages.required' => 'Chọn hình ảnh'
        ];
    }
}
