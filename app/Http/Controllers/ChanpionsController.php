<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanpion;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Auth\Events\Registered;

class ChanpionsController extends Controller
{
    public function indexChanpion(){
        $chanpionsData = Chanpion::all();
        return view('chanpions.index', compact('chanpionsData'));
    }

    public function newChanpion() {
        //chanpion登録画面を呼ぶ
        return view('chanpions.new');
    }

    public function createChanpion(Request $request) {

        $request->validate([
            'name' => 'string|max:255',
            'sub_name' => 'string|max:255',
            'popular_name' => 'string|max:20',
            'feature' => 'string|max:60',
            'main_roll_id' => 'nullable',
            'sub_roll_id' => 'different:main_roll_id|nullable|',
            'be_cost' => 'nullable|numeric',
            'rp_cost' => 'nullable|numeric',
            'chanpion_img' => 'nullable|file|image',
            'st_attack' => 'required|numeric|max:10|min:1',
            'st_magic' => 'required|numeric|max:10|min:1',
            'st_toughness' => 'required|numeric|max:10|min:1',
            'st_mobility' => 'required|numeric|max:10|min:1',
            'st_difficulty' => 'required|numeric|max:10|min:1',
            'user_id' => 'required'
            // 'chanpion_tag_id' => 'required|numeric'
        ]
        ,[
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
            'chanpion_img.nullable' => '画像は後にいれることが出来ます',
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
        ]);
            $chanpionData = new Chanpion;


            $chanpionData->fill($request->all())->save();

            error_log('ここまで処理しました');


            //リダイレクトする、その時にフラッシュメッセージをいれる
            return redirect('/chanpions')->with('flash_message',__('Registered.'));
    }

    public function editChanpion($id){
        // GETパラメータが数字かどうかをチェックする
        //事前にチェックする事で無駄なアクセスを減らせる
        if(!ctype_digit($id)){

            return redirect('/chanpions/new')->with('flash_message', __('Invalid operation was performed.'));
        }

       $chanpion = Chanpion::find($id);
        // $chanpion = Auth::user()->drills()->find($id);
        return view('chanpions.edit', compact('chanpion'));
    }

    public function updateChanpion(Request $request, $id){
    // GETパラメータが数字かどうかをチェックする
    if(!ctype_digit($id)){
        return redirect('/chanpions/new')->with('flash_message', __('Invalid operation was performed.'));
    }

    $chanpionsData = Chanpion::find($id);
    $chanpionsData->fill($request->all())->save();

    return redirect('/chanpions')->with('flash_message', __('Updated.'));
}

    public function deleteChanpion($id) {
        if(!ctype_digit($id)){
            return redirect('/chanpions/new')->with('flash_message', __('Invalid operation was performed.'));
    }
    Chanpion::find($id)->delete();

    return redirect('/chanpions')->with('flash_message', __('Deleted.'));
    }
// スキル系

    public function newSkill() {
        //chanpionスキル登録画面を呼ぶ
        return view('chanpions.newSkill');
    }

    public function createSkill(Request $request) {

        $request->validate([
            // 'name' => 'string|max:255',
            // 'sub_name' => 'string|max:255',
            // 'popular_name' => 'string|max:20',
            // 'feature' => 'string|max:60',
            // 'main_roll_id' => 'nullable',
            // 'sub_roll_id' => 'different:main_roll_id|nullable|',
            // 'be_cost' => 'nullable|numeric',
            // 'rp_cost' => 'nullable|numeric',
            // 'chanpion_img' => 'nullable|file|image',
            // 'st_attack' => 'required|numeric|max:10|min:1',
            // 'st_magic' => 'required|numeric|max:10|min:1',
            // 'st_toughness' => 'required|numeric|max:10|min:1',
            // 'st_mobility' => 'required|numeric|max:10|min:1',
            // 'st_difficulty' => 'required|numeric|max:10|min:1',
            // 'user_id' => 'required'
        // ]
        // ,[
        //     'name.required' => '名前は必須入力です',
        //     'name.string' => '文字列で入力してください',
        //     'name.max' => '名前は255文字以内で入力して下さい',
        //     'sub_name.required' => '英名は必須入力です',
        //     'sub_name.max' => '英名は255文字以内で入力して下さい',
        //     'sub_name.string' => '文字列で入力して下さい',
        //     'popular_name.string' => '文字列で入力して下さい',
        //     'popular_name.max' => '20文字以内で入力して下さい',
        //     'feature.string' => '文字列で入力して下さい',
        //     'feature.max' => '60文字以内で入力して下さい',
        //     'sub_roll_id.different' => 'メインロールと同一ロールは、選択できません',
        //     'be_cost.numeric' => '数値ではありません',
        //     'rp_cost.numeric' => '数値ではありません',
        //     'chanpion_img.file' => 'アップロードできませんでした',
        //     'chanpion_img.image' => 'アップロードできない形式です',
        //     'chanpion_img.nullable' => '画像は後にいれることが出来ます',
        //     'st_attack.required' => '必須入力です',
        //     'st_magic.required' => '必須入力です',
        //     'st_toughness.required' => '必須入力です',
        //     'st_mobility.required' => '必須入力です',
        //     'st_difficulty.required' => '必須入力です',
        //     'st_attack.max' => '10以下の値を入力してください',
        //     'st_attack.min' => '0以上の値を入力してください',
        //     'st_magic.max' => '10以下の値を入力してください',
        //     'st_magic.min' => '0以上の値を入力してください',
        //     'st_toughness.max' => '10以下の値を入力してください',
        //     'st_toughness.min' => '0以上の値を入力してください',
        //     'st_mobility.max' => '10以下の値を入力してください',
        //     'st_mobility.min' => '0以上の値を入力してください',
        //     'st_difficulty.max' => '10以下の値を入力してください',
        //     'st_difficulty.min' => '0以上の値を入力してください',
        //     'user_id.required' => '必須入力です'
        // ]);
            $chanpionData = new Chanpion;


            $chanpionData->fill($request->all())->save();

            error_log('ここまで処理しました');


            //リダイレクトする、その時にフラッシュメッセージをいれる
            return redirect('/chanpions')->with('flash_message',__('Registered.'));
    }

}