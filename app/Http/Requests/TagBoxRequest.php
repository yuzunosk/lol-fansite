<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagBoxRequest extends FormRequest
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
            'name'        => 'string|max:255',
            'chanpion_id' => 'required|numeric',
            'chanpion_tag_id_1'  => 'required|string|max:20',
            'chanpion_tag_id_2'  => 'nullable|string|max:20',
            'chanpion_tag_id_3'  => 'nullable|string|max:20',
            'chanpion_tag_id_4'  => 'nullable|string|max:20',
            'chanpion_tag_id_5'  => 'nullable|string|max:20',
            'chanpion_tag_id_6'  => 'nullable|string|max:20',
            'chanpion_tag_id_7'  => 'nullable|string|max:20',
            'chanpion_tag_id_8'  => 'nullable|string|max:20',
            'chanpion_tag_id_9'  => 'nullable|string|max:20',
            'chanpion_tag_id_10' => 'nullable|string|max:20',
        ];
    }

    public function messages()
    {
        return [
            'name.required'          => 'nameは必須入力です',
            'name.max'               => '255文字以上の入力は出来ません',
            'chanpion_id.required'   => 'IDは必須入力です',
            'chanpion_id.numeric'    => 'IDは数値でなければいけません',
            'chanpion_tag_id_1.required' => 'タグ１は、必須入力です',
            'chanpion_tag_id_1.string'   => 'タグ１は、文字で入力してください',
            'chanpion_tag_id_1.max'   => '20文字以上の入力は出来ません',
            'chanpion_tag_id_2.string'   => 'タグ2は、文字で入力してください',
            'chanpion_tag_id_2.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_3.string'   => 'タグ3は、文字で入力してください',
            'chanpion_tag_id_3.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_4.string'   => 'タグ4は、文字で入力してください',
            'chanpion_tag_id_4.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_5.string'   => 'タグ5は、文字で入力してください',
            'chanpion_tag_id_5.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_6.string'   => 'タグ6は、文字で入力してください',
            'chanpion_tag_id_6.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_7.string'   => 'タグ7は、文字で入力してください',
            'chanpion_tag_id_7.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_8.string'   => 'タグ8は、文字で入力してください',
            'chanpion_tag_id_8.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_9.string'   => 'タグ9は、文字で入力してください',
            'chanpion_tag_id_9.max'  => '20文字以上の入力は出来ません',
            'chanpion_tag_id_10.string'   => 'タグ１0は、文字で入力してください',
            'chanpion_tag_id_10.max' => '20文字以上の入力は出来ません',
        ];
    }
}
