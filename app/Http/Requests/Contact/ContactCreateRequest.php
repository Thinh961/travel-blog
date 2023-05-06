<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactCreateRequest extends FormRequest
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
            'fullname' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không để trống',
            'max' => ':attribute vượt quá tối đa :max kí tự',
            'email' => ':attribute không đúng định dạng',
            'numeric' => ':attribute phải là dạng số',
        ];
    }

    public function attributes()
    {
        return [
            'fullname' => 'Họ và tên',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
        ];
    }
}
