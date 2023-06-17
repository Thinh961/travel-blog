<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'password' => 'confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không để trống',
            'image' => ':attribute không đúng định dạng',
            'confirmed' => ':attribute xác nhận không khớp'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên hiển thị',
            'password' => 'Mật khẩu',
            'avatar' => 'Avatar',
        ];
    }
}
