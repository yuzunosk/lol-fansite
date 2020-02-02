<?php

namespace App\Http\Controllers;
use App\User;
use App\Articles;
use App\ArticleCategory;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // --------
    // 記事
    // --------
    public function indexArticles() {
        //記事一覧表示画面を呼ぶ
        //全てのデータを取り出す
        $articleDatas = Articles::all();

        return view('articles.index', compact('articleDatas',));
    }

    public function newArticles() {
        //記事登録画面を呼ぶ
        $categoryDatas = ArticleCategory::all();
        $userDatas = User::all();

        return view('articles.new', compact(['categoryDatas','userDatas']));
    }

    public function createArticles(Request $request) {
        $request->validate([
            'title' => 'string|max:255',
            'text' => 'nullable|string|max:255',
            'img' => 'nullable|file|image|max:10240',
        ],
    [
        'title.string' => 'タイトルは必須入力です',
    ]);

        $articleData = new Articles;
        $articleData->title = $request->title;
        $articleData->category_id = $request->category_id;
        $articleData->text = $request->text;
        $articleData->user_id = $request->user_id;
        //ファイルアップロード
        if($request->file('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $articleData->img = $request->file('img')->storeAs('img/article' , $filename);
        }
        $articleData->save();
        return redirect('/articles')->with('flash_message', __('Registered.'));
    }

    public function deleteArticles($id){
        if(!ctype_digit($id)) {
           return redirect('/articles')->with('flash_message', __('Invalid operation was performed.'));
        }
        Articles::fill($id)->delete();
        return redirect('/articles')->with('flash_message', __('Article Deleted.'));
    }

    public function updateArticles(Request $request , $id) {
         if(!ctype_digit($id)){
             return redirect('/articles')->with('flash_message', __('Invalid operation was performed.'));
         }
         $updataData = Articles::find($id);
         $updataData->fill($request->all())->save();
         return redirect('/articles')->with('flash_message', __('Updated Article'));
    }

    public function editArticles($id){
        if(ctype_digit($id)){
            return redirect('/articles')->with('flash_message', __('Invalid operation was performed.'));
        }
        $articleEditData = Articles::fill($id);
        return view('articles.edit', compact('articleEditData'));
    }
    // 記事 END---------------------------



// ----------------------
// 記事カテゴリー
// -----------------------
public function indexCategory() {
    //記事一覧表示画面を呼ぶ
    //全てのデータを取り出す
    $articleDatas = Articles::all();
        return view('articles.index', compact('articleDatas'));
    }

    public function newCategory() {
        
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
    
    public function deleteCategory($id){
        if(!ctype_digit($id)) {
            redirect('/articles')->with('flash_message', __('Invalid operation was performed.'));
        }
        ArticleCategory::fill($id)->delete();
        return redirect('/articles')->with('flash_message' ,__('Category Deleted'));
    }
    
    // 記事カテゴリー END
}