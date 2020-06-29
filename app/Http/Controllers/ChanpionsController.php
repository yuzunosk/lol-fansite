<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


use App\Http\Requests\ChanpionRequest;
use App\Http\Requests\SkillRequest;
use App\Http\Requests\RollRequest;
use App\Http\Requests\TagRequest;
use App\Http\Requests\TagBoxRequest;

use App\User;
use App\Chanpion;
use App\Skill;
use App\Roll;
use App\Tag;
use App\TagBox;

// use Illuminate\Auth\Events\Registered;

class ChanpionsController extends Controller
{
    // ------------------------
    //マイページ表示
    // ------------------------
    public function mypage()
    {
        $myChanpionData = Auth::user()->chanpions()->get();
        return view('chanpions.mypage', compact('myChanpionData'));
    }

    // ---------------------------------
    // チャンピオン系
    // ---------------------------------
    public function indexChanpion(Request $request)
    {
        //ユーザー毎のデータ取得
        // $chanpionsData = Auth::user()->chanpions()->get();
        $chanpionsData = DB::table('chanpions')->orderBy('id', 'desc')->paginate(8);
        $tagDatas      = Tag::all();
        $rollDatas     = Roll::all();
        $tagBoxDatas   = TagBox::all();
        $sort          = $request->sort;
        $roll          = $request->roll;
        $tag           = $request->tag;

        Log::info('タグボックスデータ' . $tagBoxDatas);

        return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas', 'sort', 'roll', 'tag']));
    }

    public function newChanpion()
    {
        //chanpion登録画面を呼ぶ
        //ロールカテゴリーデータをDBから呼び出す
        //ユーザーデータをDBから呼び出す
        $rollCategorys = Roll::all();
        $userDatas = User::all();
        $tagDatas = Tag::all();

        return view('chanpions.new', compact(['rollCategorys', 'userDatas', 'tagDatas']));
    }

    public function createChanpion(ChanpionRequest $request)
    {
        // dd($request->file('chanpion_img'));


        //一つずつ入れた方が後の変更に対応しやすい
        $chanpionData = new Chanpion;

        //ファイル・リサイズ
        if ($request->file('chanpion_img')) {
            Log::info('ファイル名前' . $request->file('chanpion_img'));
            // dd($request->file('chanpion_img'));
            $file = $request->file('chanpion_img');
            Log::info('ファイルデータ:' . $file);

            $filename = $file->getClientOriginalName();
            Log::info('ファイルデータnext:' . $filename);

            $chanpionData->chanpion_img = $request->file('chanpion_img')->storeAs('top/chanpion', $filename, ['disk' => 's3']);
        } else {
            $chanpionData->chanpion_img = null;
        }

        //一度に入れてしまうとDBのimgパスと保存されるパスが異なる為、一つ一つ入れていく
        $chanpionData->name          = $request->name;
        $chanpionData->sub_name      = $request->sub_name;
        $chanpionData->popular_name  = $request->popular_name;
        $chanpionData->feature       = $request->feature;
        $chanpionData->main_roll_id  = $request->main_roll_id;
        $chanpionData->sub_roll_id   = $request->sub_roll_id;
        $chanpionData->be_cost       = $request->be_cost;
        $chanpionData->rp_cost       = $request->rp_cost;
        $chanpionData->st_attack     = $request->st_attack;
        $chanpionData->st_magic      = $request->st_magic;
        $chanpionData->st_toughness  = $request->st_toughness;
        $chanpionData->st_mobility   = $request->st_mobility;
        $chanpionData->st_difficulty = $request->st_difficulty;
        $chanpionData->user_id       = $request->user_id;

        Auth::user()->chanpions()->save($chanpionData);


        //リダイレクトする、その時にフラッシュメッセージをいれる
        return redirect('/chanpions')->with('flash_message', __('Registered.'));
    }

    public function editChanpion($id)
    {
        // GETパラメータが数字かどうかをチェックする
        //事前にチェックする事で無駄なアクセスを減らせる
        if (!ctype_digit($id)) {

            return redirect('/chanpions')->with('flash_message', __('Invalid operation was performed.'));
        }
        $rollCategorys = Roll::all();
        $userDatas = User::all();
        $chanpion = Chanpion::find($id);
        // $chanpion = Auth::user()->drills()->find($id);
        return view('chanpions.edit', compact(['chanpion', 'rollCategorys', 'userDatas']));
    }

    public function updateChanpion(ChanpionRequest $request, $id)
    {
        // GETパラメータが数字かどうかをチェックする
        if (!ctype_digit($id)) {
            return redirect('/chanpions')->with('flash_message', __('Invalid operation was performed.'));
        }

        $chanpionData = Chanpion::find($id);

        //fileデータの処理
        if ($request->file('chanpion_img')) {
            $file = $request->file('chanpion_img');
            $filename = $file->getClientOriginalName();
            $chanpionData->chanpion_img = $request->file('chanpion_img')->storeAs('top/chanpion', $filename, ['disk' => 's3']);
        } else {
            $chanpionData->chanpion_img = null;
        }


        //一度に入れてしまうとDBのimgパスと保存されるパスが異なる為、一つ一つ入れていく
        $chanpionData->name          = $request->name;
        $chanpionData->sub_name      = $request->sub_name;
        $chanpionData->popular_name  = $request->popular_name;
        $chanpionData->feature       = $request->feature;
        $chanpionData->main_roll_id  = $request->main_roll_id;
        $chanpionData->sub_roll_id   = $request->sub_roll_id;
        $chanpionData->be_cost       = $request->be_cost;
        $chanpionData->rp_cost       = $request->rp_cost;
        $chanpionData->st_attack     = $request->st_attack;
        $chanpionData->st_magic      = $request->st_magic;
        $chanpionData->st_toughness  = $request->st_toughness;
        $chanpionData->st_mobility   = $request->st_mobility;
        $chanpionData->st_difficulty = $request->st_difficulty;
        $chanpionData->user_id       = $request->user_id;

        Auth::user()->chanpions()->save($chanpionData);

        return redirect('/chanpions')->with('flash_message', __('Updated.'));
    }
!
    public function deleteChanpion($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/chanpions')->with('flash_message', __('Invalid operation was performed.'));
        }
        Chanpion::find($id)->delete();

        return redirect('/chanpions')->with('flash_message', __('Deleted.'));
    }

    // ---------------------------------
    // スキル系
    // ---------------------------------

    public function indexSkill()
    {
        return view('chanpions.skillIndex', compact('skillDatas'));
    }


    public function listSkill($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/chanpions')->with('flash_message', __('Invalid operation was performed.'));
        }
        // スキルデータとチャンピオンデータ取得
        $skillDatas = Chanpion::find($id)->with('skills')->where('id', $id)->first();
        Log::info('スキルデータログ：' . $skillDatas);
        $data = "";
        foreach ($skillDatas->skills as $skillData) {
            Log::info('スキルデータ単体：' . $skillData->skill_type);
            $data = $skillData;
        }
        //変数の中身チェック
        if ($data) {
            //空でなければスキルリストページへ
            return view('chanpions.skillIndex', compact('skillDatas'));
        }
        //空であればchanpion.indexにリダイレクト
        return redirect('/chanpions')->with('flash_message', __('Skill not registered yet.'));
    }

    public function newSkill(SkillRequest $request)
    {
        //chanpionスキル登録画面を呼ぶ
        $chanpionDatas = Chanpion::all();
        $typeData = $request->skill_type;
        // $chanpData = $request->chanpion;
        return view('chanpions.newSkill', compact(['chanpionDatas', 'typeData']));
    }

    public function createSkill(SkillRequest $request)
    {
        // dd($request->file('skill_icon_1'));
        // dd($request->file('skill_icon_2'));

        $skillDatas = new Skill;

        //ファイル・リサイズ
        if (!is_null($request->file('skill_icon_1'))) {
            Log::info('ファイル名前:' . $request->file('skill_icon_1'));
            $file_1 = $request->file('skill_icon_1');
            Log::info('ファイルデータ:' . $file_1);

            $filename_1 = $file_1->getClientOriginalName();
            Log::info('ファイルデータnext1:' . $filename_1);

            $skillDatas->skill_icon_1 = $request->file('skill_icon_1')->storeAs('top/skill', $filename_1, ['disk' => 's3']);
        } else //データがなければnullをいれる
        {
            $skillDatas->skill_icon_1 = null;
            Log::info('skill_icon_1に、nullが入りました');
        }

        if (!is_null($request->file('skill_icon_2'))) {
            Log::info('ファイル名前:' . $request->file('skill_icon_2'));
            $file_2 = $request->file('skill_icon_2');
            Log::info('ファイルデータ:' . $file_2);

            $filename_2 = $file_2->getClientOriginalName();
            Log::info('ファイルデータnext2:' . $filename_2);

            $skillDatas->skill_icon_2 = $request->file('skill_icon_2')->storeAs('top/skill', $filename_2, ['disk' => 's3']);
        } else //データがなければnullをいれる
        {
            $skillDatas->skill_icon_2 = null;
            Log::info('skill_icon_2に、nullが入りました');
        }

        //一度に入れてしまうとDBのimgパスと保存されるパスが異なる為、一つ一つ入れていく
        $skillDatas->name         = $request->name;
        $skillDatas->na_name      = $request->na_name;
        $skillDatas->skill_type   = $request->skill_type;
        $skillDatas->chanpion_id  = $request->chanpion_id;
        $skillDatas->text         = $request->text;

        $skillDatas->save();

        //リダイレクトする、その時にフラッシュメッセージをいれる
        return redirect('/chanpions')->with('flash_message', __('Registered.'));
    }

    public function editSkill($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/skills')->with('flash_message', __('Invalid operation was performed.'));
        }
        // Log::info($id);
        $skillData = Skill::find($id);
        // $chanpionData = Chanpion::find($id);
        Log::info('スキルデータ:' . $skillData);
        // Log::info('チャンピオンデータ:'.$chanpionData);


        return view('chanpions.skillEdit', compact(['skillData']));
    }

    public function updateSkill(SkillRequest $request, $id)
    {
        if (!ctype_digit($id)) {
            return redirect('/skills')->with('flash_message', __('Invalid operation was performed.'));
        }
        Log::info('idは：' . $id);

        $skillDatas = new Skill;

        //ファイル・リサイズ
        if (!is_null($request->file('skill_icon_1'))) {
            Log::info('ファイル名前:' . $request->file('skill_icon_1'));
            $file_1 = $request->file('skill_icon_1');
            Log::info('ファイルデータ:' . $file_1);

            $filename_1 = $file_1->getClientOriginalName();
            Log::info('ファイルデータnext:' . $filename_1);

            $skillDatas->skill_icon_1 = $request->file('skill_icon_1')->storeAs('skill', $filename_1, ['disk' => 's3']);
        } else //データがなければnullをいれる
        {
            $skillDatas->skill_icon_1 = null;
            Log::info('skill_icon_1に、nullが入りました');
        }


        if (!is_null($request->file('skill_icon_2'))) {
            Log::info('ファイル名前:' . $request->file('skill_icon_2'));
            $file_2 = $request->file('skill_icon_2');
            $filename_2 = $file_2->getClientOriginalName();
            $skillDatas->skill_icon_2 = $request->file('skill_icon_2')->storeAs('skill', $filename_2, ['disk' => 's3']);
        } else //データがなければnullをいれる
        {
            $skillDatas->skill_icon_2 = null;
            Log::info('skill_icon_2に、nullが入りました');
        }

        //一度に入れてしまうとDBのimgパスと保存されるパスが異なる為、一つ一つ入れていく
        $skillDatas->name         = $request->name;
        $skillDatas->na_name      = $request->na_name;
        $skillDatas->skill_type   = $request->skill_type;
        $skillDatas->chanpion_id  = $request->chanpion_id;
        $skillDatas->text         = $request->text;

        $skillDatas->save();

        return redirect('/chanpions')->with('flash_message', __('Updated.'));
    }

    public function deleteSkill($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/skills')->with('flash_mesage', __('Invalid operation was performed.'));
        }
        Skill::find($id)->delete();
        return redirect('/skills/{id}')->with('flash_message', __('Deleted.'));
    }

    // ---------------------------------
    // ロール系
    // ---------------------------------
    public function indexRoll()
    {
        $rollsData = Roll::all();
        return view('chanpions.rollIndex', compact('rollsData'));
    }

    public function newRoll()
    {
        return view('chanpions.newRoll');
    }

    public function createRoll(RollRequest $request)
    {

        $rollsData = new Roll;
        $rollsData->fill($request->all())->save();
        return redirect('/rolls')->with('flash_message', __('New Roll Registered.'));
    }

    public function editRoll($id)
    {
        // GETパラメータが数字かどうかをチェックする
        //事前にチェックする事で無駄なアクセスを減らせる
        if (!ctype_digit($id)) {
            return redirect('/rolls')->with('flash_message', __('Invalid operation was performed.'));
        }

        $roll = Roll::find($id);
        // $chanpion = Auth::user()->drills()->find($id);
        return view('chanpions.rollEdit', compact('roll'));
    }

    public function updateRoll(RollRequest $request, $id)
    {
        //idチェック
        if (!ctype_digit($id)) {
            return redirect('/rolls')->with('flash_message', __('Invalid operation was performed.'));
        }
        $rollData = Roll::find($id);
        $rollData->fill($request->all())->save();
        return redirect('/rolls')->with('flash_message', __('Updated Roll.'));
    }

    public function deleteRoll($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/rolls')->with('flash_mesage', __('Invalid operation was performed.'));
        }
        Roll::find($id)->delete();
        return redirect('/rolls')->with('flash_message', __('Deleted Roll.'));
    }

    // ---------------------------------
    // タグ系
    // ---------------------------------
    public function indexTag()
    {
        $tagsData = Tag::all();
        return view('chanpions.tagIndex', compact('tagsData'));
    }

    public function newTag()
    {
        return view('chanpions.newTag');
    }

    public function createTag(TagRequest $request)
    {
        $tagsData = new Tag;
        $tagsData->fill($request->all())->save();
        return redirect('/tags')->with('flash_message', __('New Tag Registered.'));
    }

    public function editTag($id)
    {
        // GETパラメータが数字かどうかをチェックする
        //事前にチェックする事で無駄なアクセスを減らせる
        if (!ctype_digit($id)) {
            return redirect('/tags')->with('flash_message', __('Invalid operation was performed.'));
        }

        $tag = Tag::find($id);
        // $tag = Auth::user()->drills()->find($id);
        return view('chanpions.tagEdit', compact('tag'));
    }
    public function updateTag(TagRequest $request, $id)
    {
        if (!ctype_digit($id)) {
            return redirect('/tags')->with('flash_message', __('Invalid operation was performed.'));
        }

        $tagData = Tag::find($id);
        $tagData->fill($request->all())->save();

        return redirect('/tags')->with('flash_message', __('Updated Tag.'));
    }
    public function deleteTag($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/tags')->with('flash_mesage', __('Invalid operation was performed.'));
        }
        Tag::find($id)->delete();
        return redirect('/tags')->with('flash_message', __('Deleted Tag.'));
    }
    // ---------------------------------
    // タグボックス系
    // ---------------------------------

    public function newTagBox($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/chanpions')->with('flash_mesage', __('Invalid operation was performed.'));
        }
        $chanpionData = Chanpion::find($id);
        $tagDatas  = Tag::all();
        return view('chanpions.newTagBox', compact(['chanpionData', 'tagDatas']));
    }

    public function createTagBox(TagBoxRequest $request)
    {
        // var_dump($request)
        $tagboxDatas = new TagBox;
        $chanpion = Chanpion::find($request->chanpion_id);
        $chanpion->tagBox()->save($tagboxDatas->fill($request->all()));
        return redirect('/chanpions')->with('flash_message', __('New TagBox Registered.'));
    }

    public function editTagBox($id)
    {
        // GETパラメータが数字かどうかをチェックする
        //事前にチェックする事で無駄なアクセスを減らせる
        if (!ctype_digit($id)) {
            return redirect('/chanpions')->with('flash_message', __('Invalid operation was performed.'));
        }
        //タグボックスデータを検索する
        $data = TagBox::with('chanpion')->where('chanpion_id', $id)->count();
        Log::info('tagBoxDataは、' . $data);
        //$tagBoxDataに中身が入っているかどうか
        if ($data == 0) {
            //空ならば、チャンピオンindexに遷移する
            Log::info('→ newルート');
            $chanpionData = Chanpion::find($id);
            $tagDatas  = Tag::all();
            return view('chanpions.newTagBox', compact(['chanpionData', 'tagDatas']));
        }
        Log::info('→ editルート');
        $chanpionData = Chanpion::find($id);
        $tagBoxData = TagBox::with('chanpion')->where('chanpion_id', $id)->first();
        Log::info('取得したタグボックスデータ' . $tagBoxData);
        $tagDatas  = Tag::all();

        return view('chanpions.tagBoxEdit', compact(['chanpionData', 'tagBoxData', 'tagDatas']));
    }
    public function updateTagBox(TagBoxRequest $request, $id)
    {
        // Log::info('id:'.$id);
        // GETパラメータが数字かどうかをチェックする
        //事前にチェックする事で無駄なアクセスを減らせる
        if (!ctype_digit($id)) {
            return redirect('/chanpions')->with('flash_message', __('Invalid operation was performed.'));
        }
        $tagboxDatas = TagBox::where('chanpion_id', $id)->first();
        // Log::info('データ観察:'.$tagboxDatas)
        $tagboxDatas->fill($request->all())->save();
        return redirect('/chanpions')->with('flash_message', __('New TagBox Registered.'));
    }
}
