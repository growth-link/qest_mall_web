<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginReqest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'nullable|max:150',
            'profile' => 'nullable|max:1500',
            'belong' => 'nullable|max:191',
            'office' => 'nullable|max:191',
            'address' => 'nullable|max:191',
            'url' => 'nullable|url|max:65000',
            'tel' => 'nullable|max:50',
            'note' => 'nullable|max:255',

            'type.*' => 'nullable|max:255',
            'career_data.*.body.*' => 'nullable|max:191',
        ];
    }

    public function messages() 
    {
        return [
            'title.max' => '150文字までで入力してください',
            'profile.max' => '1500文字までで入力してください',
            'belong.max' => '191文字までで入力してください',
            'office.max' => '191文字までで入力してください',
            'address.max' => '191文字までで入力してください',
            'url.url' => '有効なURL形式で指定してください。',
            'url.max' => '65000文字までで入力してください',
            'tel.max' => '50文字までで入力してください',
            'note.max' => '255文字までで入力してください',

            'type.*.max' => '255文字までで入力してください',
            'career_data.*.body.*.max' => '191文字までで入力してください',
        ];
    }
}
