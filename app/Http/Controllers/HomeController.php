<?php

namespace App\Http\Controllers;

use App\Chanpion;
use App\Tag;
use App\TagBox;
use App\Skill;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */

     public function showHome() {
        $chanpions = Chanpion::all();
        $skills    = Skill::with('chanpion')->get();
        // Log::info('ホームへのスキルデータ取得：'.$skills);
        $tagBoxs      = TagBox::with('chanpion')->get();
        $tags         = Tag::all();
        return view('home', compact(['chanpions','skills','tagBoxs','tags']));

      //   return view('home', compact('chanpions'));
     }
}
