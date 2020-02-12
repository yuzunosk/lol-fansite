<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Auth\Guard;


class UserComposer {
    protected $auth;

    public function __construct(Guard $auth)
    {
        //認証情報をここにいれる
        $this->auth = $auth;
    }
    public function compose(View $view) {
            // userという変数を使えるようにしその中に$this->auth->user()という値をつめてビューに返す
            $view->with('user' , $this->auth->user());
    }
}