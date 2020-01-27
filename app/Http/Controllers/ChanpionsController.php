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
            'main_roll_id' => 'string|nullable|',
            'sub_roll_id' => 'string|distinct|nullable|',
            'be_cost' => 'nullable|numeric',
            'rp_cost' => 'nullable|numeric',
            'chanpion_img' => 'nullable|file|image',
            'st_sttack' => 'required|numeric|max:10|min:1',
            'st_magic' => 'required|numeric|max:10|min:1',
            'st_toghness' => 'required|numeric|max:10|min:1',
            'st_mobility' => 'required|numeric|max:10|min:1',
            'st_difficulty' => 'required|numeric|max:10|min:1',
            'user_id' => 'required|numeric',
            'chanpion_tag_id' => 'required|numeric'
        ],[
            'name.required' => '名前は必須入力です',
            'name.string' => '文字列で入力してください',
            'name.max' => '名前は255文字以内で入力して下さい',            'sub_name.required' => '英名は必須入力です',
            'sub_name.max' => '英名は255文字以内で入力して下さい',
            'sub_name.string' => '文字列で入力して下さい',
            'popular_name.string' => '文字列で入力して下さい',
            'popular_name.max' => '20文字以内で入力して下さい',
            'feature.string' => '文字列で入力して下さい',
            'feature.max' => '60文字以内で入力して下さい',
            'chanpion_img.file' => 'アップロードできませんでした',
            'chanpion_img.image' => 'アップロードできない形式です',
        ]
    );
            // 新しいインスタンスとして登録
            $chanpionData = new Chanpion;

            //fillメソッドの中のセーブメソッドを使う、引数には
            Auth::User()->chanpions()->save($chanpionData->fill($request->all()));



            //リダイレクトする、その時にフラッシュメッセージをいれる
            return redirect('/chanpions')->with('flash_message',__('Registered.'));
    }

    public function edit($id){
        // GETパラメータが数字かどうかをチェックする
        //事前にチェックする事で無駄なアクセスを減らせる
        if(!ctype_digit($id)){

            return redirect('/chanpions/new')->with('flash_message', __('Invalid operation was performed.'));
        }

//        $drill = Drill::find($id);
        $drills = Auth::user()->drills()->find($id);
        return view('chanpions.edit',compact('chanpion'));
    }

    public function update(Request $request, $id){
    // GETパラメータが数字かどうかをチェックする
    if(!ctype_digit($id)){
        return redirect('/chanpions/new')->with('flash_message', __('Invalid operation was performed.'));
    }

    $chanpionsData = Chanpion::find($id);
    $chanpionsData->fill($request->all())->save();

    return redirect('/chanpions')->with('flash_message', __('Registered.'));
}




}
