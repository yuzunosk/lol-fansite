<?php

namespace App\Http\Controllers;
use App\Articles;
use App\ArticleCategory;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function indexArticles() {
        //記事一覧表示画面を呼ぶ
        //全てのデータを取り出す
        $articleDatas = Articles::all();

        return view('articles.index', compact('articleDatas'));
    }

    public function newArticles() {
        //記事登録画面を呼ぶ
        return view('articles.new');
    }

    public function createArticles(Request $request) {
        $request->validate([
            'title' => 'string|max:255'

        ]);

        $articleData = new Articles;

        $articleData->fill($request->all())->save();
        return redirect('/articles')->with('flash_message', __('Registered.'));
    }


    public function indexCategory() {
        //記事一覧表示画面を呼ぶ
        //全てのデータを取り出す
        $articleDatas = Articles::all();
        return view('articles.index', compact('articleDatas'));
    }

    public function newCategorys() {
        return view('articles.newCategory');
    }

    public function createCategory(Request $request) {
        $request->validate([
            'name' => 'string|max:255'
        ]);

        $categoryData = new ArticleCategory;
        $categoryData->fill($request->all())->save();

        return redirect('/articles')->with('flash_message', __('Registered'));
    }
}
