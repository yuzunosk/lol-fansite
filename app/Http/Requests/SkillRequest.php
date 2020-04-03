<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class SkillRequest extends FormRequest
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
        $c_id = $this->chanpion_id;

        return [
            'name'            => 'string|max:255',
            'na_name'         => 'string|max:255',
            'skill_type'      => ['string', Rule::unique('chanpionSkills')->ignore($this->id)->where('chanpion_id', $c_id)],
            'chanpion_id'     => 'numeric',
            'text'            => 'string|nullable|max:255',
            'skill_icon_1'    => 'nullable|file|image|max:10240',
            'skill_icon_2'    => 'nullable|file|image|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => '名前は必須入力です',
            'name.string'           => '文字列で入力してください',
            'name.max'              => '名前は255文字以内で入力して下さい',
            'na_name.required'      => '英名は必須入力です',
            'na_name.max'           => '英名は255文字以内で入力して下さい',
            'na_name.string'        => '文字列で入力して下さい',
            'skill_type.string'     => '文字列で入力して下さい',
            'chanpion_id.required'  => 'チャンピオンIDは必須入力です',
            'text.string'           => '文字列で入力して下さい',
            'text.max'              => 'テキストは255文字以内で入力して下さい',
            'skill_icon_1.file'     => 'アップロードできませんでした',
            'skill_icon_1.image'    => 'アップロードできない形式です',
            'skill_icon_1.max'      => 'データが大きすぎます',
            'skill_icon_2.file'     => 'アップロードできませんでした',
            'skill_icon_2.image'    => 'アップロードできない形式です',
            'skill_icon_2.max'      => 'データが大きすぎます',
        ];
    }
}
