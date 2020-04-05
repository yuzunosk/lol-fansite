<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tag;
use App\Roll;
use App\TagBox;
use App\Chanpion;
use App\Mail\Test;
use Illuminate\Support\Facades\Mail;

use Illuminate\Foundation\Console\Presets\React;

class MypageController extends Controller
{
    public function indexMypage(Request $request)
    {
        //今ログインしているユーザーの登録情報を取得する
        $chanpionsData = Auth::user()->chanpions()->orderBy('id', 'desc')->paginate(8);
        $tagDatas      = Tag::all();
        $rollDatas     = Roll::all();
        $tagBoxDatas   = TagBox::all();

        Log::info('タグボックスデータ' . $tagBoxDatas);

        return view('mypages.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
    }

    public function showProfile()
    {
        //現在ログインしているユーザー情報取得
        $user = Auth::user()->first();
        Log::info($user);
        return view('mypages.edit', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        //不正な$idでないかチェックする
        if (!ctype_digit($id)) {
            return redirect('/chanpions')->with('flash_message', __('Invalid operation was performed.'));
        }
        //バリデーション開始
        $request->validate(
            [
                'name' => 'string|max:255',
            ],
            [
                'name.max' => '名前は255文字以内で入力してください'
            ]
        );
        //ユーザーインスタンス定義
        $user = new User;
        $user = User::find($id);
        Log::info($user);
        //ユーザー情報の更新
        $user->fill($request->all())->save();

        //変更連絡Email送信テスト
        Mail::to($user)->send(new Test('登録内容を変更しました'));

        return redirect('/chanpions')->with('flash_message', __('UserData Updated.'));
    }
}
