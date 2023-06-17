<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'name' => 'required|max:255',
            'name_zh' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không để trống',
            'max' => ':attribute vượt quá tối đa :max kí tự',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên danh mục',
            'name_zh' => 'Tên danh mục (tiếng Trung)',
        ];
    }
}
