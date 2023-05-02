<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'description' => 'required',
            'description_zh' => 'required',
            'content' => 'required',
            'content_zh' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không để trống',
            'max' => ':attribute vượt quá tối đa :max kí tự',
            'image' => ':attribute không đúng định dạng ảnh',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tiêu đề bài viết',
            'name_zh' => 'Tiêu đề bài viết (tiếng Trung)',
            'description' => 'Mô tả ngắn',
            'description_zh' => 'Mô tả ngắn (tiếng Trung)',
            'content' => 'Nội dung',
            'content_zh' => 'Nội dung (tiếng Trung)',
            'image' => 'Ảnh bài viết',
            'category_id' => 'Danh mục bài viết'
        ];
    }
}
