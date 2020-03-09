<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'name'     => 'string|max:20',
            'sub_name' => 'string|max:20',
        ];
    }
    public function messages()
    {
        return [
            'name.string'     => 'ロール名は文字で入力して下さい',
            'sub_name.string' => 'ロール名は20文字で入力して下さい',
            'name.max'        => 'ロール名は20文字以内で入力して下さい',
            'sub_name.max'    => 'ロール名は20文字以内で入力して下さい',
        ];
    }
}
