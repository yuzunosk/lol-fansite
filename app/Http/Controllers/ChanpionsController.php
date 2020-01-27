<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanpion;
use Illuminate\Auth\Events\Registered;

class ChanpionsController extends Controller
{
    public function newChanpion() {
        //chanpion登録画面を呼ぶ
        return view('chanpions.new');
    }

    public function createChanpion(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'sub_name' => 'required|string|max:255',
            'popular_name' => 'nullable|string|max:20',
            'feature' => 'nullable|string|max:60',
            'main_roll_id' => 'nullable|string',
            'sub_roll_id' => 'nullable|string',
            'be_cost' => 'nullable|numeric',
            'rp_cost' => 'nullable|numeric',
            'chanpion_img' => 'nullable|image',
            'st_sttack' => 'required|numeric|max:10|min:1',
            'st_magic' => 'required|numeric|max:10|min:1',
            'st_toghness' => 'required|numeric|max:10|min:1',
            'st_mobility' => 'required|numeric|max:10|min:1',
            'st_difficulty' => 'required|numeric|max:10|min:1',
            'user_id' => 'required|numeric',
            'chanpion_tag_id' => 'required|numeric'
        ]);
            
            $chanpionsData = new Chanpion;

            //fillメソッドの中のセーブメソッドを使う、引数には
            $chanpionsData->fill($request->all())->save();

            //リダイレクトする、その時にフラッシュメッセージをいれる
            return redirect('/chanpions/new')->with('flash_message',__('Registered.'));
    }
}
