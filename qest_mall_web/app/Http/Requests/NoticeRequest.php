<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'text' => 'required|string|min:10|max:255',
            'sex' => ['max:1', 'regex:/^[男|女]+$/u'],
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'text' => '本文',
        ];
    }

    public function messages() {
        return [
            'title.required' => '名前を入力してください',
            'text.required' => '整数で入力してください',
            'age.between' => '0～150で入力してください',
        ];
    }
}
