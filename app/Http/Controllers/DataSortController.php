<?php

namespace App\Http\Controllers;

use App\Chanpion;
use App\Tag;
use App\Roll;
use App\TagBox;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class DataSortController extends Controller
{
    public function sort(Request $request)
    {

        //リクエストデータの判定。セッションデータの判定を行う。
        if ($request->sort) {
            session(['sort' => $request->sort]);
        } else {
            if (empty(session('sort'))) {
                session(['sort' => '']);
            } else {
            }
        }
        if ($request->roll) {
            session(['roll' => $request->roll]);
        } else {
            if (empty(session('roll'))) {
                session(['roll' => '']);
            }
        }
        if ($request->tag) {
            session(['tag' => $request->tag]);
        } else {
            if (empty(session('tag'))) {
                session(['tag' => '']);
            }
        }

        // ソートデータを収納
        $sort = session('sort', '');
        $roll = session('roll', '');
        $tag = session('tag', '');
        // // ソートデータ確認
        Log::info(session()->all());

        $tagDatas     = Tag::all();
        $rollDatas     = Roll::all();
        $tagBoxDatas   = TagBox::with('chanpion');
        // Log::info('データ：'.$tagDatas);
        // Log::info('データ：'.$rollDatas);
        // Log::info('データ：'.$tagBoxDatas);


        //sortデータが空でなく、値が１である場合
        if (!empty($sort) && $sort == 1) {
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id', 'desc')->paginate(8);
                    return redirect('/chanpions', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('id', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('id', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll  || empty($tag)) {
                // Log::info('ルートroll');
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('id', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orW('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orW('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orW('chanpion_tag_id_10', $tag)->orderBy('id', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } elseif (!empty($sort) && $sort == 2) {
            //sortデータが空でなく、値が"2"である場合
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id', 'asc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('id', 'asc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('id', 'asc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll || empty($tag)) {
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('id', 'asc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('id', 'asc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } elseif (!empty($sort) && $sort == 3) {
            //sortデータが空でなく、値が"3"である場合
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_attack', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_attack', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_attack', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_attack', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll || empty($tag)) {
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_attack', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('st_attack', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } elseif (!empty($sort) && $sort == 4) {
            //sortデータが空でなく、値が"4"である場合
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_magic', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_magic', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_magic', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_magic', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_magic', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_magic', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll || empty($tag)) {
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_magic', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('st_magic', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } elseif (!empty($sort) && $sort == 5) {
            //sortデータが空でなく、値が"5"である場合
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_toughness', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_toughness', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_toughness', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_toughness', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll || empty($tag)) {
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_toughness', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('st_toughness', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } elseif (!empty($sort) && $sort == 6) {
            //sortデータが空でなく、値が"6"である場合
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_mobility', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_mobility', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_mobility', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_mobility', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll || empty($tag)) {
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_mobility', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('st_mobility', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } elseif (!empty($sort) && $sort == 7) {
            //sortデータが空でなく、値が"7"である場合
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_difficulty', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_difficulty', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_difficulty', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_difficulty', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll || empty($tag)) {
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_difficulty', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('st_difficulty', 'desc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } elseif (!empty($sort) && $sort == 8) {
            //sortデータが空でなく、値が"8"である場合
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_difficulty', 'asc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_difficulty', 'asc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_difficulty', 'asc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('st_difficulty', 'asc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll || empty($tag)) {
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_difficulty', 'asc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('st_difficulty', 'asc')->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        } else {
            if (empty($roll)) {
                //rollが空の場合
                if (empty($tag)) {
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id', 'desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //tagを条件に加える
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('id', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    Log::info($chanpionsData);
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll == 'reset') {
                if (empty($tag)) {
                    //rollがresetであり、tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id', 'desc')->paginate(8);
                    return redirect('/chanpions', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                } else {
                    //rollがreset、tag条件あり
                    $chanpionsData = TagBox::with('chanpion')->where('chanpion_tag_id_1', $tag)
                        ->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)
                        ->orderBy('id', 'desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if ($chanpionsData->isEmpty()) {
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
                }
            } elseif ($roll && empty($tag)) {
                Log::info('ルートroll');
                //rollがありtagが空の場合
                $chanpionsData = DB::table('chanpions')->orderBy('id', 'desc')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->paginate(8);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                Log::info($chanpionsData);

                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return redirect('/chanpions', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            } else {
                Log::info('ルートroll&tag');
                //rollがありtagもある場合
                $chanpionsData = TagBox::with('chanpion')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('chanpion_tag_id_1', $tag)->orWhere('chanpion_tag_id_2', $tag)->orWhere('chanpion_tag_id_3', $tag)->orWhere('chanpion_tag_id_4', $tag)->orWhere('chanpion_tag_id_5', $tag)->orWhere('chanpion_tag_id_6', $tag)->orWhere('chanpion_tag_id_7', $tag)->orWhere('chanpion_tag_id_8', $tag)->orWhere('chanpion_tag_id_9', $tag)->orWhere('chanpion_tag_id_10', $tag)->orderBy('id', 'desc')->paginate(8);
                Log::info($chanpionsData);
                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                if ($chanpionsData->isEmpty()) {
                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                }
                return redirect('/chanpions', compact(['chanpionsData', 'tagDatas', 'rollDatas', 'tagBoxDatas']));
            }
        }
        Log::info('チャンピオンデータ:' . $chanpionsData);
    }
}
