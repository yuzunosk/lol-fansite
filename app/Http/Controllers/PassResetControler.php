<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassResetControler extends Controller
{
    public function showView()
    {
        return redirect('/chanpions')->with('flash_message', __('Currently in preparation.'));
    }
};
