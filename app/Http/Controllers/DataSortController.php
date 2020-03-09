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
    public function sort(Request $request){
        //sortデータを収納
        $sort = $request->sort;
        Log::info('ソートデータ：'.$sort);
        $roll = $request->roll;
        Log::info('ロールデータ：'.$roll);
        $tag = $request->tag;
        Log::info('タグデータ：'.$tag);
        $message = "";

        $tagDatas      = Tag::all();
        // Log::info('データ：'.$tagDatas);
        $rollDatas     = Roll::all();
        // Log::info('データ：'.$rollDatas);
        $tagBoxDatas   = TagBox::all();
        // Log::info('データ：'.$tagBoxDatas);


        //sortデータが空でなく、値が１である場合
        if(!empty($sort) && $sort == 1){
            if(empty($roll)){
                //rollが空の場合
                if(empty($tag)){
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id','desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }else{
                    //tagを条件に加える
                    $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('id','desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                        if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                        }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }
                }elseif($roll || empty($tag)){
                    // Log::info('ルートroll');
                    //rollがありtagが空の場合
                    $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('id','desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if($chanpionsData->isEmpty()){
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }else{
                    //rollがありtagもある場合
                    $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('id','desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if($chanpionsData->isEmpty()){
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }
        }elseif(!empty($sort) && $sort == 2){
            //sortデータが空でなく、値が"2"である場合
            if(empty($roll)){
                //rollが空の場合
                if(empty($tag)){
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('id','asc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }else{
                    //tagを条件に加える
                    $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('id','asc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                        if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                        }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }
                }elseif($roll || empty($tag)){
                    //rollがありtagが空の場合
                    $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('id','asc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if($chanpionsData->isEmpty()){
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }else{
                    //rollがありtagもある場合
                    $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('id','asc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if($chanpionsData->isEmpty()){
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }
        }elseif(!empty($sort) && $sort == 3){
        //sortデータが空でなく、値が"3"である場合
            if(empty($roll)){
                //rollが空の場合
                if(empty($tag)){
                    //tagが空の場合
                    $chanpionsData = DB::table('chanpions')->orderBy('st_attack','desc')->paginate(8);
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }else{
                    //tagを条件に加える
                    $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('st_attack','desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                        if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                        }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }
                }elseif($roll || empty($tag)){
                    //rollがありtagが空の場合
                    $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_attack','desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if($chanpionsData->isEmpty()){
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }else{
                    //rollがありtagもある場合
                    $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('st_attack','desc')->paginate(8);
                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                    if($chanpionsData->isEmpty()){
                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                    }
                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                }
        }elseif(!empty($sort) && $sort == 4){
        //sortデータが空でなく、値が"4"である場合
                if(empty($roll)){
                    //rollが空の場合
                    if(empty($tag)){
                        //tagが空の場合
                        $chanpionsData = DB::table('chanpions')->orderBy('st_magic','desc')->paginate(8);
                        return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                    }else{
                        //tagを条件に加える
                        $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('st_magic','desc')->paginate(8);
                        //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                            if($chanpionsData->isEmpty()){
                                return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                            }
                        return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                    }
                    }elseif($roll || empty($tag)){
                        //rollがありtagが空の場合
                        $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_magic','desc')->paginate(8);
                        //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                        if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                        }
                        return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                    }else{
                        //rollがありtagもある場合
                        $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('st_magic','desc')->paginate(8);
                        //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                        if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                        }
                        return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                    }
            }elseif(!empty($sort) && $sort == 5){
        //sortデータが空でなく、値が"5"である場合
                        if(empty($roll)){
                            //rollが空の場合
                            if(empty($tag)){
                                //tagが空の場合
                                $chanpionsData = DB::table('chanpions')->orderBy('st_toughness','desc')->paginate(8);
                                return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                            }else{
                                //tagを条件に加える
                                $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('st_toughness','desc')->paginate(8);
                                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                    if($chanpionsData->isEmpty()){
                                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                    }
                                return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                            }
                            }elseif($roll || empty($tag)){
                                //rollがありtagが空の場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_toughness','desc')->paginate(8);
                                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                if($chanpionsData->isEmpty()){
                                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                }
                                return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                            }else{
                                //rollがありtagもある場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('st_toughness','desc')->paginate(8);
                                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                if($chanpionsData->isEmpty()){
                                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                }
                                return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                            }
                    }elseif(!empty($sort) && $sort == 6){
                        //sortデータが空でなく、値が"6"である場合
                        if(empty($roll)){
                        //rollが空の場合
                        if(empty($tag)){
                        //tagが空の場合
                            $chanpionsData = DB::table('chanpions')->orderBy('st_mobility','desc')->paginate(8);
                            return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                        }else{
                            //tagを条件に加える
                            $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('st_mobility','desc')->paginate(8);
                            //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                            if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                            }
                            return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                            }

                            }elseif($roll || empty($tag)){
                            //rollがありtagが空の場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_mobility','desc')->paginate(8);
                            //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                if($chanpionsData->isEmpty()){
                                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }else{
                                //rollがありtagもある場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('st_mobility','desc')->paginate(8);
                                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                    if($chanpionsData->isEmpty()){
                                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                    }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }
                    }elseif(!empty($sort) && $sort == 7){
                        //sortデータが空でなく、値が"7"である場合
                        if(empty($roll)){
                        //rollが空の場合
                        if(empty($tag)){
                        //tagが空の場合
                            $chanpionsData = DB::table('chanpions')->orderBy('st_difficulty','desc')->paginate(8);
                            return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                        }else{
                            //tagを条件に加える
                            $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('st_difficulty','desc')->paginate(8);
                            //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                            if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                            }
                            return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                            }

                            }elseif($roll || empty($tag)){
                            //rollがありtagが空の場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_difficulty','desc')->paginate(8);
                            //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                if($chanpionsData->isEmpty()){
                                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }else{
                                //rollがありtagもある場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('st_difficulty','desc')->paginate(8);
                                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                    if($chanpionsData->isEmpty()){
                                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                    }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }
                    }elseif(!empty($sort) && $sort == 8){
                        //sortデータが空でなく、値が"8"である場合
                        if(empty($roll)){
                        //rollが空の場合
                        if(empty($tag)){
                        //tagが空の場合
                            $chanpionsData = DB::table('chanpions')->orderBy('st_difficulty','asc')->paginate(8);
                            return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                        }else{
                            //tagを条件に加える
                            $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('st_difficulty','asc')->paginate(8);
                            //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                            if($chanpionsData->isEmpty()){
                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                            }
                            return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                            }

                            }elseif($roll || empty($tag)){
                            //rollがありtagが空の場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->orderBy('st_difficulty','asc')->paginate(8);
                            //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                if($chanpionsData->isEmpty()){
                                    return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }else{
                                //rollがありtagもある場合
                                $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('st_difficulty','asc')->paginate(8);
                                //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                    if($chanpionsData->isEmpty()){
                                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                    }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }
                    }else{
                        if(empty($roll)){
                                //rollが空の場合
                                if(empty($tag)){
                                    //tagが空の場合
                                    $chanpionsData = DB::table('chanpions')->orderBy('id','desc')->paginate(8);
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }else{
                                    //tagを条件に加える
                                    $chanpionsData = DB::table('chanpions')->where('chanpion_tag', $tag)->orderBy('id','desc')->paginate(8);
                                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                        if($chanpionsData->isEmpty()){
                                            return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                        }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }
                                }elseif($roll || empty($tag)){
                                    Log::info('ルートroll');
                                    //rollがありtagが空の場合
                                    $chanpionsData = DB::table('chanpions')->orderBy('id','desc')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->paginate(8);
                                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                    Log::info($chanpionsData);

                                    if($chanpionsData->isEmpty()){
                                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                    }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }else{
                                    //rollがありtagもある場合
                                    $chanpionsData = DB::table('chanpions')->where('main_roll_id', $roll)->orWhere('sub_roll_id', $roll)->where('chanpion_tag', $tag)->orderBy('id','desc')->paginate(8);
                                    //$chanpionsDataが０の場合はエラーメッセージを出して元の画面に戻す
                                    if($chanpionsData->isEmpty()){
                                        return redirect('/chanpions')->with('flash_message', __('Data does not exist.'));
                                    }
                                    return view('chanpions.index', compact(['chanpionsData','tagDatas','rollDatas','tagBoxDatas','sort','tag','roll']));
                                }
        }
        Log::info('チャンピオンデータ:'.$chanpionsData);
        }



    }
