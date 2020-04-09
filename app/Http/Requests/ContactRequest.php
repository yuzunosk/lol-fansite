<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "name"    => "required|max:50",
            "email"   => "required|email|max:100",
            "contact" => "required|max:500"
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前は必須入力です',
            'name.max'    => '名前は50文字以内で入力して下さい',
            'email.required' => 'emailは必須入力です',
            'email.email' => 'email形式で入力してください',
            'email.max' => 'emailの入力文字数が多すぎます',
            'contact.required' => '本文は必須入力です',
            'contact.max' => '本文は500文字以内で入力をお願いします',
        ];
    }
}
