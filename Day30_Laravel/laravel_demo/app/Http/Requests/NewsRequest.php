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
            'title' => ['required', 'min:6']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Title không được để trống",
            'title.min' => "Title không được nhỏ hơn 6 ký tự",
            'avatar.image' => 'Avatar phải có định dạng ảnh',
        ];
    }
}
