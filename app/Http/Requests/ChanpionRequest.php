<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChanpionRequest extends FormRequest
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
            'name' => 'string|max:255',
            'sub_name' => 'string|max:255',
            'popular_name' => 'nullable|string|max:20',
            'feature' => 'nullable|string|max:60',
            'main_roll_id' => 'nullable|string',
            'sub_roll_id' => 'different:main_roll_id|nullable|',
            'be_cost' => 'nullable|numeric',
            'rp_cost' => 'nullable|numeric',
            'chanpion_img' => 'nullable|file|image|max:10240',
            'st_attack' => 'numeric|max:10|min:1',
            'st_magic' => 'numeric|max:10|min:1',
            'st_toughness' => 'numeric|max:10|min:1',
            'st_mobility' => 'numeric|max:10|min:1',
            'st_difficulty' => 'numeric|max:10|min:1',
            'user_id' => 'required',
        ];
    }

    public function messages()
{
    return [
        'name.required' => '名前は必須入力です',
        'name.string' => '文字列で入力してください',
        'name.max' => '名前は255文字以内で入力して下さい',
        'sub_name.required' => '英名は必須入力です',
        'sub_name.max' => '英名は255文字以内で入力して下さい',
        'sub_name.string' => '文字列で入力して下さい',
        'popular_name.string' => '文字列で入力して下さい',
        'popular_name.max' => '20文字以内で入力して下さい',
        'feature.string' => '文字列で入力して下さい',
        'feature.max' => '60文字以内で入力して下さい',
        'sub_roll_id.different' => 'メインロールと同一ロールは、選択できません',
        'be_cost.numeric' => '数値ではありません',
        'rp_cost.numeric' => '数値ではありません',
        'chanpion_img.file' => 'アップロードできませんでした',
        'chanpion_img.image' => 'アップロードできない形式です',
        'st_attack.required' => '必須入力です',
        'st_magic.required' => '必須入力です',
        'st_toughness.required' => '必須入力です',
        'st_mobility.required' => '必須入力です',
        'st_difficulty.required' => '必須入力です',
        'st_attack.max' => '10以下の値を入力してください',
        'st_attack.min' => '0以上の値を入力してください',
        'st_magic.max' => '10以下の値を入力してください',
        'st_magic.min' => '0以上の値を入力してください',
        'st_toughness.max' => '10以下の値を入力してください',
        'st_toughness.min' => '0以上の値を入力してください',
        'st_mobility.max' => '10以下の値を入力してください',
        'st_mobility.min' => '0以上の値を入力してください',
        'st_difficulty.max' => '10以下の値を入力してください',
        'st_difficulty.min' => '0以上の値を入力してください',
        'user_id.required' => '必須入力です'
    ];
}

}
