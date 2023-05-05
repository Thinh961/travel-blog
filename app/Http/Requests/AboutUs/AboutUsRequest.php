<?php

namespace App\Http\Requests\AboutUs;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'description_zh' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không để trống',
            'max' => ':attribute vượt quá tối đa :max kí tự',
            'image' => ':attribute không đúng định dạng',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tiêu đề',
            'name_zh' => 'Tiêu đề (tiếng Trung)',
            'description' => 'Mô tả ngắn',
            'description_zh' => 'Mô tả ngắn (tiếng Trung)',
            'image' => 'Ảnh',
        ];
    }
}
