<?php

namespace App\Http\Controllers;

use App\Chanpion;

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
        return view('home', compact('chanpions'));
     }
}
