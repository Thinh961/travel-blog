<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerCreateRequest extends FormRequest
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
            'image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không để trống',
            'image' => ':attribute không đúng định dạng',
        ];
    }

    public function attributes()
    {
        return [
            'image' => 'Ảnh Banner',
        ];
    }
}
